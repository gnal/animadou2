<?php

namespace Acme\Bundle\AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Msi\AdminBundle\DataFixtures\BaseFixture;

class LoadMenuData extends BaseFixture
{
    protected $manager;

    public function load(ObjectManager $manager)
    {
        $this->manager = $this->container->get('msi_admin.menu_root_manager');
        // admin root
        $this->create(
            [
                'published' => true,
            ],
            [
                'fr' => [
                    'name' => 'admin',
                ],
                'en' => [
                    'name' => 'admin',
                ],
            ],
            'admin_root'
        );
        // admin page
        $this->create(
            [
                'parent' => $this->getRef('admin_root'),
                'published' => true,
            ],
            [
                'fr' => [
                    'name' => 'Pages',
                    'route' => '@msi_admin_page_admin_list',
                ],
                'en' => [
                    'name' => 'Pages',
                    'route' => '@msi_admin_page_admin_list',
                ],
            ]
        );
    }
}
