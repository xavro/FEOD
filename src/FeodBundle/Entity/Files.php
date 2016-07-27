<?php

namespace FeodBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Finder\Finder;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @UniqueEntity("name")
 */

class Files
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=false)
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @Assert\File(maxSize="6000000")
     *
     */
    public $file;

    /**
     * @var boolean
     *
     * @ORM\Column(name="new", type="boolean")
     */
    private $new;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sent", type="boolean")
     */
    private $sent;
    
    /**
     * @ORM\ManyToOne(targetEntity="FeodBundle\Entity\Munition", inversedBy="file")
     */
    private $munition;

    //utilisé lors de la supression
    private $temp;

    public function getAbsolutePath()
    {
        if (is_dir($this->getUploadRootDir())) {

            /*while (false !== ($entry = readdir($handle))) {
                $webPath[]=$this->getUploadDir().'/'.$entry;
            }*/
            $path = array();
            $dir = scandir($this->getUploadRootDir());
            foreach ($dir as $file) {
                if(is_dir($file)){
                    //unset($dir[array_search($file, $dir)]);
                }
                else{
                    //var_dump($file);
                    $path[] = $this->getUploadRootDir().'/'.$file;
                }
            }


            //closedir($handle);
        }
        else{
            return null;
        }

        if(empty($path)){
            return null;
        }
        else{
            return $path;
        }
    }

    public function getWebPath()
    {

        if (is_dir($this->getUploadRootDir())) {

            $path = array();
            $dir = scandir($this->getUploadRootDir());
            foreach ($dir as $file) {
                if(is_dir($file)){
                }
                else{
                    $path[] = $this->getUploadDir().'/'.$file;
                }
            }


            //closedir($handle);
        }
        else{
            return null;
        }

        if(empty($path)){
            return null;
        }
        else{
            return $path[0];
        }
    }

    public function getDoublePath(){
    {

        if (is_dir($this->getUploadRootDir())) {

            $path = array();
            $dir = scandir($this->getUploadRootDir());
            foreach ($dir as $file) {
                if(is_dir($file)){
                }
                else{
                    $path[] = array($this->getUploadDir(),
                        $this->getUploadRootDir().'/'.$file);
                }
            }


            //closedir($handle);
        }
        else{
            return null;
        }

        if(empty($path)){
            return null;
        }
        else{
            return $path;
        }
    }
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/Files/'.$this->path;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {

        if (null !== $this->file) {
            // faites ce que vous voulez pour générer un nom unique
            //$this->path = uniqid().'.'.$this->file->guessExtension();
            //$this->name = uniqid();
            $this->path = sha1(uniqid(rand()));
            //$this->name = $this->name.'.'.$this->file->guessExtension();
            
        }
        if($this->name === null){
            //$this->name = sha1(uniqid(rand()));
            //$this->name = $this->file->getBasename();
            $this->name = $this->name.'.'.$this->file->guessExtension();
        }
        
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {

        if(!is_dir($this->getUploadRootDir())){
            mkdir($this->getUploadRootDir());
        }
        if (null === $this->file) {
            return;
        }

        // s'il y a une erreur lors du déplacement du fichier, une exception
        // va automatiquement être lancée par la méthode move(). Cela va empêcher
        // proprement l'entité d'être persistée dans la base de données si
        // erreur il y a
        $this->file->move($this->getUploadRootDir(), $this->name);

        unset($this->file);
    }

    /**
     * Pre remove upload
     *
     * @ORM\PreRemove()
     */
    public function preRemoveUpload()
    {
        $this->temp = $this->getUploadRootDir();
    }


    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        $finder = new Finder();
        $finder->files()->in($this->temp);
        foreach ($finder as $file) {
            unlink($file);
        }

        if(is_dir($this->temp)){
            rmdir($this->temp);
        }
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
     * @return Document
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
     * Set path
     *
     * @param string $path
     * @return Document
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    public function __toString(){
        return $this->name;
    }

    public function __construct(){
        $this->new = true;
        $this->sent = false;
        $this->file = null;
    }

    /**
     * Set new
     *
     * @param boolean $new
     * @return Photo
     */
    public function setNew($new)
    {
        $this->new = $new;

        return $this;
    }

    /**
     * Get new
     *
     * @return boolean 
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * Set sent
     *
     * @param boolean $sent
     * @return Photo
     */
    public function setSent($sent)
    {
        $this->sent = $sent;

        return $this;
    }

    /**
     * Get sent
     *
     * @return boolean 
     */
    public function getSent()
    {
        return $this->sent;
    }
    
    /**
     * Set munition
     *
     * @param \FeodBundle\Entity\Munition $munition
     * @return File
     */
    public function setMunition(\FeodBundle\Entity\Munition $munition = null)
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
