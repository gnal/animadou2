<?php

namespace Dog\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function contactAction()
    {
        return $this->render('DogMainBundle:Contact:contact.html.twig');
    }
}
