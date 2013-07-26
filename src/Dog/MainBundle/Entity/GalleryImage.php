<?php

namespace Dog\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 */
class GalleryImage
{
    use \Msi\CmfBundle\Doctrine\Extension\Model\Publishable;
    use \Msi\CmfBundle\Doctrine\Extension\Model\Timestampable;

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
        return (string) '#'.$this->getId();
    }
}
