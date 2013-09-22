<?php

namespace Dog\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DogUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
