<?php


namespace Birke\NvcBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;

class NeedsController extends FOSRestController {

    public function getNeedAction($id) {
        $need = $this->getDoctrine()->getRepository('BirkeNvcBundle:Need')->find($id);
        $view = $this->view(array("need" => $need), 200)
        ;
        return $this->handleView($view);
    }

} 