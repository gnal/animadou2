<?php

namespace Dog\MainBundle\Admin;

use Msi\AdminBundle\Admin\Admin;
use Msi\AdminBundle\Grid\GridBuilder;
use Symfony\Component\Form\FormBuilder;

class PageImageAdmin extends Admin
{
    public function configure()
    {
        $this->options = [
            'uploadify' => true,
        ];
    }

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
