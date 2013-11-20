<?php

namespace Dog\MainBundle\Admin;

use Msi\AdminBundle\Admin\Admin;
use Msi\AdminBundle\Grid\GridBuilder;
use Symfony\Component\Form\FormBuilder;

class SlideAdmin extends Admin
{
    public function buildGrid(GridBuilder $builder)
    {
        $builder
            ->add('filename', 'image')
            ->add('', 'action')
        ;
    }

    public function buildForm(FormBuilder $builder)
    {
        $builder
            ->add('filenameFile', 'file')
        ;
    }
}
