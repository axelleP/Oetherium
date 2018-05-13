<?php

namespace Apa\StoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Image
 *
 * @ORM\Table()
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Apa\StoryBundle\Entity\ImageRepository")
 */
class Image
{
    /**
     * @ORM\ManyToOne(targetEntity="Apa\StoryBundle\Entity\CharacterStory", inversedBy="images"))
     * @ORM\JoinColumn(nullable=true)
     */
    private $characterStory;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=100)
     */
    private $path;

    /**
     *
     */
    private $oldPath;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100)
     */
    private $description;

    /**
     * @Assert\File(maxSize="6000000",
     * mimeTypesMessage = "Votre fichier n'est apparemment pas une image...",
     * maxSizeMessage = "Votre fichier est trop gros ({{ size }} Mo). La taille maximum autorisée est de : {{ limit }} Mo")
     */
    private $file;


    /**
     * @var datetime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

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
     * Set path
     *
     * @param string $path
     * @return Image
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

    /**
     * Set description
     *
     * @param string $description
     * @return Image
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set file
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set updated
     *
     * @param string $updated
     * @return Projects
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set characterStory
     *
     * @param \Apa\StoryBundle\Entity\CharacterStory $characterStory
     * @return Image
     */
    public function setCharacterStory(\Apa\StoryBundle\Entity\CharacterStory $characterStory)
    {
        $this->characterStory = $characterStory;

        return $this;
    }

    /**
     * Get characterStory
     *
     * @return \Apa\StoryBundle\Entity\CharacterStory
     */
    public function getCharacterStory()
    {
        return $this->characterStory;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            // Sauvegarde temporaire de l'ancienne image pour la supprimer en postUpdate
            if ($this->getPath() !== null) {
                $this->oldPath = $this->getPath();
            }

            $extension = $this->file->guessExtension();
            if (!$extension) {
                // l'extension n'a pas été trouvée
                $extension = 'bin';
            }
            // générer un nom unique
            $this->path = sha1(uniqid(mt_rand(), true)).'.'.$extension;
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     * Lifecycle callback to upload the file to the server
     */
    public function lifecycleFileUpload() {
        $this->upload();

        // Si l'utilisateur avait déjà une image, on supprime l'ancienne
        if ($this->oldPath != null) {
            $file = $this->getAbsolutePathOldPath();
            if ($file) {
                unlink($file);
            }
        }
    }

    /**
     * Manages the copying of the file to the relevant place on the server
     */
    public function upload()
    {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }
        // on déplace le fichier choisi dans le répertoire de destination
        $this->file->move($this->getUploadRootDir(), $this->path);

        // clean up the file property as you won't need it anymore
        $this->setFile(null);
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    public function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // l'image dans la vue.
        // ucwords : 1ere lettre en majuscule
        if ($this->getCharacterStory() != NULL){
            return 'uploads/apastory/images/'.ucwords($this->getCharacterStory()->getFirstname()).'-'.ucwords($this->getCharacterStory()->getName());
        }
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        $file = $this->getAbsolutePath();
        if ($file) {
            unlink($file);
        }
    }

    // retourne le chemin absolu du fichier
    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    // retourne le chemin absolu de l'ancien avatar
    public function getAbsolutePathOldPath()
    {
        return null === $this->oldPath ? null : $this->getUploadRootDir().'/'.$this->oldPath;
    }

    // retourne le chemin web, peut être utilisé dans un template pour ajouter un lien vers le fichier uploadé
    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    /**
     * Updates the hash value to force the preUpdate and postUpdate events to fire
     */
    public function refreshUpdated() {
        $this->setUpdated(new \DateTime("now"));
    }
}
