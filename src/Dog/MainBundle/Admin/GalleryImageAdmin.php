<?php

namespace Dog\MainBundle\Admin;

use Msi\CmfBundle\Admin\Admin;
use Msi\CmfBundle\Grid\GridBuilder;
use Symfony\Component\Form\FormBuilder;

class GalleryImageAdmin extends Admin
{
    public function buildGrid(GridBuilder $builder)
    {
        $builder
            ->add('published', 'boolean')
            ->add('filename', 'image')
            ->add('', 'action')
        ;
    }

    public function buildForm(FormBuilder $builder)
    {
        $builder
            ->add('file', 'file')
        ;
    }
}
