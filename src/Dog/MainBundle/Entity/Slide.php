<?php

namespace Dog\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Msi\AdminBundle\Tools\Cutter;

/**
 * @ORM\Entity
 */
class Slide
{
    use \Msi\AdminBundle\Doctrine\Extension\Model\Uploadable;
    use \Msi\AdminBundle\Doctrine\Extension\Model\Timestampable;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Dog\CmsBundle\Entity\Page", inversedBy="slides")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $page;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $filename;

    protected $filenameFile;

    public function processFilename($file)
    {
        $cutter = new Cutter($file);
        $cutter->resize(300, 200)->save('0');
        $cutter->resize(600, 400)->save();
    }

    public function getUploadFields()
    {
        return ['filename'];
    }

    public function getUploadDirSuffix()
    {
        return $this->getPage()->getId();
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

    public function getFilenameFile()
    {
        return $this->filenameFile;
    }

    public function setFilenameFile($filenameFile)
    {
        $this->filenameFile = $filenameFile;
        $this->updatedAt = new \DateTime();

        return $this;
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

    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return (string) $this->id;
    }
}
