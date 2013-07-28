<?php

namespace Acme\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Msi\AdminBundle\Entity\Page as BasePage;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 */
class Page extends BasePage
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="Block", mappedBy="pages")
     */
    protected $blocks;

    /**
     * @ORM\ManyToOne(targetEntity="Site")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $site;

    /**
     * @ORM\OneToMany(targetEntity="Dog\MainBundle\Entity\PageImage", mappedBy="page")
     */
    protected $images;

    public function __construct()
    {
        parent::__construct();
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
}
