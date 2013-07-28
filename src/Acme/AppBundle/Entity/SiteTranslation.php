<?php

namespace Acme\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Msi\AdminBundle\Entity\SiteTranslation as BaseSiteTranslation;

/**
 * @ORM\Entity
 */
class SiteTranslation extends BaseSiteTranslation
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}
