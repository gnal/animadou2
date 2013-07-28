<?php

namespace Dog\MainBundle\Admin;

use Msi\AdminBundle\Admin\Admin;
use Msi\AdminBundle\Grid\GridBuilder;
use Symfony\Component\Form\FormBuilder;

class TestimonialAdmin extends Admin
{
    public function buildGrid(GridBuilder $builder)
    {
        $builder
            ->add('published', 'boolean')
            ->add('name')
            ->add('', 'action')
        ;
    }

    public function buildForm(FormBuilder $builder)
    {
        $builder
            ->add('name')
        ;
    }

    public function buildTranslationForm(FormBuilder $builder)
    {
        $builder
            ->add('content', 'textarea', [
                'attr' => [
                    'class' => 'tinymce',
                ],
            ])
        ;
    }
}
