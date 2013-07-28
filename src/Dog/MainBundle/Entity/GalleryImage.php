<?php

namespace Dog\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Msi\AdminBundle\Tools\Cutter;

/**
 * @ORM\Entity
 */
class GalleryImage
{
    use \Msi\AdminBundle\Doctrine\Extension\Model\Uploadable;
    use \Msi\AdminBundle\Doctrine\Extension\Model\Publishable;
    use \Msi\AdminBundle\Doctrine\Extension\Model\Timestampable;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Gallery", inversedBy="images")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $gallery;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $filename;

    protected $file;

    public function processFile($file)
    {
        $cutter = new Cutter($file);
        $cutter->resizeProp(600)->save();
        $cutter->resize(146, 100)->save('t');
    }

    public function getUploadFields()
    {
        return ['file' => 'filename'];
    }

    public function getUploadDirSuffix()
    {
        return $this->getGallery()->getId();
    }

    public function getGallery()
    {
        return $this->gallery;
    }

    public function setGallery($gallery)
    {
        $this->gallery = $gallery;

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
}
