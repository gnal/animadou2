<?php

namespace Dog\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PackageController extends Controller
{
    public function listAction()
    {
        $parameters['packages'] = $this->get('dog_main.package_manager')->findAll(
            [
                'a.published' => true,
            ],
            [
                'a.translations' => 'translations',
            ]
        );

        return $this->render('DogMainBundle:Package:list.html.twig', $parameters);
    }

    public function showAction()
    {
        $parameters['package'] = $this->get('dog_main.package_manager')->find(
            [
                'a.published' => true,
                'translations.slug' => $this->getRequest()->attributes->get('package'),
            ],
            [
                'a.translations' => 'translations',
            ]
        );

        return $this->render('DogMainBundle:Package:show.html.twig', $parameters);
    }

    public function navAction()
    {
        $parameters['packages'] = $this->get('dog_main.package_manager')->findAll(
            [
                'a.published' => true,
            ],
            [
                'a.translations' => 'translations',
            ]
        );

        return $this->render('DogMainBundle:Package:nav.html.twig', $parameters);
    }
}
