<?php

namespace Acme\Bundle\AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Msi\CmfBundle\DataFixtures\BaseFixture;

class LoadSiteData extends BaseFixture
{
    protected $manager;

    public function load(ObjectManager $manager)
    {
        $this->manager = $this->container->get('msi_cmf.site_manager');
        $this->create(
            [
                'host' => 'dev.acme.com',
                'enabled' => true,
                'isDefault' => true,
                'locale' => 'fr',
                'locales' => ['fr', 'en'],
            ],
            [
                'fr' => [
                    'brand' => 'Destination Pérou',
                ],
                'en' => [
                    'brand' => 'Peru Like a Local',
                ],
            ],
            'site1'
        );
    }
}
