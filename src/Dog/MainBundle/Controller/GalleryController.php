<?php

namespace Dog\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GalleryController extends Controller
{
    public function listAction()
    {
        $parameters['galleries'] = $this->get('dog_main.gallery_manager')->findAll(
            [
                'a.published' => true,
            ],
            [
                'a.translations' => 'translations',
            ]
        );

        return $this->render('DogMainBundle:Gallery:list.html.twig', $parameters);
    }

    public function showAction()
    {
        $parameters['gallery'] = $this->get('dog_main.gallery_manager')->find(
            [
                'a.published' => true,
                'translations.slug' => $this->getRequest()->attributes->get('gallery'),
            ],
            [
                'a.translations' => 'translations',
            ]
        );

        return $this->render('DogMainBundle:Gallery:show.html.twig', $parameters);
    }
}
