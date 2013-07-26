<?php

namespace Dog\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServiceController extends Controller
{
    public function listAction()
    {
        $parameters['services'] = $this->get('dog_main.service_manager')->findAll(
            [
                'a.published' => true,
            ],
            [
                'a.translations' => 'translations',
            ]
        );

        return $this->render('DogMainBundle:Service:list.html.twig', $parameters);
    }

    public function showAction()
    {
        $parameters['service'] = $this->get('dog_main.service_manager')->find(
            [
                'a.published' => true,
                'translations.slug' => $this->getRequest()->attributes->get('service'),
            ],
            [
                'a.translations' => 'translations',
            ]
        );

        return $this->render('DogMainBundle:Service:show.html.twig', $parameters);
    }

    public function navAction()
    {
        $parameters['services'] = $this->get('dog_main.service_manager')->findAll(
            [
                'a.published' => true,
            ],
            [
                'a.translations' => 'translations',
            ]
        );

        return $this->render('DogMainBundle:Service:nav.html.twig', $parameters);
    }
}
