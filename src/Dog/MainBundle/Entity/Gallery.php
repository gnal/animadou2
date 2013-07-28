<?php

namespace Dog\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 */
class Gallery
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

    /**
     * @ORM\OneToMany(targetEntity="GalleryImage", mappedBy="gallery")
     */
    protected $images;

    public function __construct()
    {
        $this->images = new ArrayCollection;
    }

    public function getImages()
    {
        return $this->images;
    }

    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return (string) $this->getTranslation()->getName();
    }
}
