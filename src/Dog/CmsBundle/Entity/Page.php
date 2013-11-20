<?php

namespace Dog\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Msi\CmsBundle\Model\Page as BasePage;
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
     * @ORM\OneToMany(targetEntity="Dog\MainBundle\Entity\Slide", mappedBy="page")
     */
    protected $slides;

    public function __construct()
    {
        parent::__construct();
        $this->slides = new ArrayCollection;
    }

    public function getSlides()
    {
        return $this->slides;
    }

    public function setSlides($slides)
    {
        $this->slides = $slides;

        return $this;
    }

}
