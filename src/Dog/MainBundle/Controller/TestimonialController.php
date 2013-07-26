<?php

namespace Dog\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestimonialController extends Controller
{
    public function listAction()
    {
        $parameters['testimonials'] = $this->get('dog_main.testimonial_manager')->findAll(
            [
                'a.published' => true,
            ],
            [
                'a.translations' => 'translations',
            ]
        );

        return $this->render('DogMainBundle:Testimonial:list.html.twig', $parameters);
    }

    public function showAction()
    {
        $parameters['testimonial'] = $this->get('dog_main.testimonial_manager')->find(
            [
                'a.published' => true,
                'translations.slug' => $this->getRequest()->attributes->get('testimonial'),
            ],
            [
                'a.translations' => 'translations',
            ]
        );

        return $this->render('DogMainBundle:Testimonial:show.html.twig', $parameters);
    }
}
