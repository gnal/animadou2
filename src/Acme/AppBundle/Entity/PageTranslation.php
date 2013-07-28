<?php

namespace Acme\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Msi\AdminBundle\Entity\PageTranslation as BasePageTranslation;

/**
 * @ORM\Entity
 */
class PageTranslation extends BasePageTranslation
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $sliderTitle;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $sliderContent;

    public function getSliderTitle()
    {
        return $this->sliderTitle;
    }

    public function setSliderTitle($sliderTitle)
    {
        $this->sliderTitle = $sliderTitle;

        return $this;
    }

    public function getSliderContent()
    {
        return $this->sliderContent;
    }

    public function setSliderContent($sliderContent)
    {
        $this->sliderContent = $sliderContent;

        return $this;
    }
}
