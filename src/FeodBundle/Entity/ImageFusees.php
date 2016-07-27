<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ImageFusees
 *
 * @ORM\Table()
 * @ORM\Entity
 * @Vich\Uploadable
 */
class ImageFusees
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="munition_imageFusees", fileNameProperty="name")
     * @Assert\File(
     *      maxSize="6000000",
     *      mimeTypes={"image/jpeg", "image/pjpeg", "image/png", "image/x-png"}
     *  )
     *
     * @var File $file
     */
    private $file;

    /**
     * @ORM\Column(type="string", length=255, name="name", nullable=true)
     *
     * @var string $name
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=255, name="famille", nullable=true)
     *
     * @var string $famille
     */
    protected $famille;

    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Munition", inversedBy="imagesFusees")
     * @ORM\JoinColumn(nullable=false)
     */
    private $munition;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime $updatedAt
     */
    protected $updatedAt;

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     */
    public function setFile(File $image = null)
    {
        $this->file = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }
    }
    
    /**
     * @return File
     */
    public function getFile()
    {
        return $this->file;
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ImageFusees
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set famille
     *
     * @param string $famille
     * @return ImageFusees
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string 
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return ImageFusees
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set munition
     *
     * @param \FeodBundle\Entity\Munition $munition
     * @return ImageFusees
     */
    public function setMunition(\FeodBundle\Entity\Munition $munition)
    {
        $this->munition = $munition;

        return $this;
    }

    /**
     * Get munition
     *
     * @return \FeodBundle\Entity\Munition 
     */
    public function getMunition()
    {
        return $this->munition;
    }
}
