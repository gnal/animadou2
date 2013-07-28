<?php

namespace Dog\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Msi\CmfBundle\Tools\Cutter;

/**
 * @ORM\Entity
 */
class PageImage
{
    use \Msi\CmfBundle\Doctrine\Extension\Model\Uploadable;
    use \Msi\CmfBundle\Doctrine\Extension\Model\Timestampable;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Acme\AppBundle\Entity\Page", inversedBy="images")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $page;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $href;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $filename;

    protected $file;

    public function processFile($file)
    {
        $cutter = new Cutter($file);
        $cutter->resize(640, 240)->save();
    }

    public function getUploadFields()
    {
        return ['file' => 'filename'];
    }

    public function getUploadDirSuffix()
    {
        return $this->getPage()->getId();
    }

    public function getHref()
    {
        return $this->href;
    }

    public function setHref($href)
    {
        $this->href = $href;

        return $this;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;
        $this->updatedAt = new \DateTime();

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return (string) '#'.$this->id;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }
}
