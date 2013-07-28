<?php

namespace Dog\MainBundle\Admin;

use Msi\AdminBundle\Admin\Admin;
use Msi\AdminBundle\Grid\GridBuilder;
use Symfony\Component\Form\FormBuilder;

class ServiceAdmin extends Admin
{
    public function buildGrid(GridBuilder $builder)
    {
        $builder
            ->add('published', 'boolean')
            ->add('name')
            ->add('', 'action')
        ;
    }

    public function buildTranslationForm(FormBuilder $builder)
    {
        $builder
            ->add('name')
            ->add('content', 'textarea', [
                'attr' => [
                    'class' => 'tinymce',
                ],
            ])
        ;
    }
}
