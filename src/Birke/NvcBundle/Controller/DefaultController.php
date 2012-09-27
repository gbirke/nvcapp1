<?php

namespace Birke\NvcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BirkeNvcBundle:Default:index.html.twig', array());
    }
}
