<?php

namespace Dog\MainBundle\Menu;

use Knp\Menu\FactoryInterface;
use Msi\AdminBundle\Menu\BaseMenuBuilder;

class MenuBuilder extends BaseMenuBuilder
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $this->getMenu('main');

        $menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');

        return $this->execute($menu);
    }
}
