<?php

namespace Dog\AdminBundle\Admin;

use Msi\AdminBundle\Admin\PageAdmin as BaseAdmin;
use Msi\AdminBundle\Grid\GridBuilder;
use Symfony\Component\Form\FormBuilder;

class PageAdmin extends BaseAdmin
{
    public function configure()
    {
        parent::configure();
        $this->options['form_template'] = 'DogAdminBundle:Page:form.html.twig';
    }

    public function buildTranslationForm(FormBuilder $builder)
    {
        parent::buildTranslationForm($builder);
        $builder
            ->add('sliderTitle')
            ->add('sliderContent', 'textarea')
        ;
    }
}
