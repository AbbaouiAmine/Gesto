<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Main/Default/index.html.twig');
    }
    public function addCourrierAction()
    {
        return $this->render('@Main/Default/addform.html.twig',
        array(
            "message"=>"Courrier Bien ajoute ",
            "title"=>"Ajouter une courrier"
         )); 
    }
}
