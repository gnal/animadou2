<?php

namespace Dog\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 */
class Service
{
    use \Msi\AdminBundle\Doctrine\Extension\Model\Publishable;
    use \Msi\AdminBundle\Doctrine\Extension\Model\Timestampable;
    use \Msi\AdminBundle\Doctrine\Extension\Model\Translatable;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return (string) $this->getTranslation()->getName();
    }
}
