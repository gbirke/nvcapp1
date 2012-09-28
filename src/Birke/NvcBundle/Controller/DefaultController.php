<?php

namespace Birke\NvcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BirkeNvcBundle:Default:index.html.twig', array());
    }

    public function searchAction(){
        $q = $this->getRequest()->request->get('q', '');
        $needRepo = $this->getDoctrine()->getRepository('BirkeNvcBundle:Need');
        $strategyRepo = $this->getDoctrine()->getRepository('BirkeNvcBundle:Strategy');
        $serializer = $this->get('serializer');
        $data = $serializer->serialize(array(
            'needs' => $needRepo->getLikeName($q),
            'strategies' => $strategyRepo->getLikeName($q)
        ), 'json');
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
