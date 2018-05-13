<?php
//Rque : character est un mot réservé

namespace Apa\StoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * CharacterStory
 *
 * @ORM\Table()
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Apa\StoryBundle\Entity\CharacterStoryRepository")
 */
class CharacterStory
{
    /**
     * @ORM\OneToMany(targetEntity="Apa\StoryBundle\Entity\Image", mappedBy="characterStory", cascade={"all"}, orphanRemoval=true)
     */
    #orphanRemoval est nécessaire pour supprimer l'image
    private $images;

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
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=50)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="arrayFirstnames", type="string", length=100)
     */
    private $arrayFirstnames;

    /**
     * @var string
     *
     * @ORM\Column(name="species", type="string", length=50)
     */
    private $species;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=50)
     */
    private $gender;

    /**
     * @var date
     *
     * @ORM\Column(name="dateBirth", type="date")
     */
    private $dateBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="placeBirth", type="string", length=50)
     */
    private $placeBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="citation", type="string", length=100)
     */
    private $citation;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=150)
     */
    private $avatar;

    /**
     * @Assert\File(maxSize="2500000",
     * mimeTypesMessage = "Votre fichier n'est apparemment pas une image...",
     * maxSizeMessage = "Votre fichier est trop gros ({{ size }} Mo). La taille maximum autorisée est de : {{ limit }} Mo")
     */
    // Limite : 2.5Mo sinon le filtre imagine_filter ne marche pas
    private $file;

    /**
     *
     */
    private $oldAvatar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="main", type="boolean")
     */
    private $main;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return CharacterStory
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
     * Set firstname
     *
     * @param string $firstname
     * @return CharacterStory
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set arrayFirstnames
     *
     * @param string $arrayFirstnames
     *
     * @return CharacterStory
     */
    public function setArrayFirstnames($arrayFirstnames)
    {
        $this->arrayFirstnames = $arrayFirstnames;

        return $this;
    }

    /**
     * Get arrayFirstnames
     *
     * @return string
     */
    public function getArrayFirstnames()
    {
        return $this->arrayFirstnames;
    }

    /**
     * Set species
     *
     * @param string $species
     * @return CharacterStory
     */
    public function setSpecies($species)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get species
     *
     * @return string
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     * @return CharacterStory
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set dateBirth
     *
     * @param \DateTime $dateBirth
     * @return CharacterStory
     */
    public function setDateBirth($dateBirth)
    {
        $this->dateBirth = $dateBirth;

        return $this;
    }

    /**
     * Get dateBirth
     *
     * @return \DateTime
     */
    public function getDateBirth()
    {
        return $this->dateBirth;
    }

    /**
     * Set placeBirth
     *
     * @param string $placeBirth
     * @return CharacterStory
     */
    public function setPlaceBirth($placeBirth)
    {
        $this->placeBirth = $placeBirth;

        return $this;
    }

    /**
     * Get placeBirth
     *
     * @return string
     */
    public function getPlaceBirth()
    {
        return $this->placeBirth;
    }

    /**
     * Set citation
     *
     * @param string $citation
     * @return CharacterStory
     */
    public function setCitation($citation)
    {
        $this->citation = $citation;

        return $this;
    }

    /**
     * Get citation
     *
     * @return string
     */
    public function getCitation()
    {
        return $this->citation;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CharacterStory
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
     * Set avatar
     *
     * @param string $avatar
     * @return CharacterStory
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
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
     * Set main
     *
     * @param boolean $main
     * @return CharacterStory
     */
    public function setMain($main)
    {
        $this->main = $main;

        return $this;
    }

    /**
     * Get main
     *
     * @return boolean
     */
    public function getMain()
    {
        return $this->main;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add images
     *
     * @param \Apa\StoryBundle\Entity\Image $images
     * @return CharacterStory
     */
    public function addImage(\Apa\StoryBundle\Entity\Image $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \Apa\StoryBundle\Entity\Image $images
     */
    public function removeImage(\Apa\StoryBundle\Entity\Image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set images
     *
     * @param entity $image
     * @return CharacterStory
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {

            // Sauvegarde temporaire de l'ancien avatar pour le supprimer en postUpdate
            if ($this->getAvatar() !== null) {
                $this->oldAvatar = $this->getAvatar();
            }

            $extension = $this->file->guessExtension();
            if (!$extension) {
                // l'extension n'a pas été trouvée
                $extension = 'bin';
            }
            // générer un nom unique
            $this->avatar = sha1(uniqid(mt_rand(), true)).'.'.$extension;
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     * Lifecycle callback to upload the file to the server
     */
    public function lifecycleFileUpload() {
        $this->upload();

        // Si l'utilisateur avait déjà un avatar, on supprime l'ancien
        if ($this->oldAvatar != null) {
            $file = $this->getAbsolutePathOldAvatar();
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
        $this->file->move($this->getUploadRootDir(), $this->avatar);

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
        return 'uploads/apastory/images/'.ucwords($this->firstname).'-'.ucwords($this->name);
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

    // retourne le chemin absolu de l'avatar
    public function getAbsolutePath()
    {
        return null === $this->avatar ? null : $this->getUploadRootDir().'/'.$this->avatar;
    }

    // retourne le chemin absolu de l'ancien avatar
    public function getAbsolutePathOldAvatar()
    {
        return null === $this->oldAvatar ? null : $this->getUploadRootDir().'/'.$this->oldAvatar;
    }

    // retourne le chemin web, peut être utilisé dans un template pour ajouter un lien vers le fichier uploadé
    public function getWebPath()
    {
      return null === $this->avatar ? null : $this->getUploadDir().'/'.$this->avatar;
    }

}
