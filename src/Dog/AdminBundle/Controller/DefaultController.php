<?php

namespace Dog\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DogAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
