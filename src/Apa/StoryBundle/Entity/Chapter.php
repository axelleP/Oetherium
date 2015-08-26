<?php

namespace Apa\StoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapter
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Apa\StoryBundle\Entity\ChapterRepository")
 */
class Chapter
{
    /**
     * @ORM\OneToMany(targetEntity="Apa\StoryBundle\Entity\PageBook", mappedBy="chapter", cascade={"all"}, orphanRemoval=true)
     */
    #orphanRemoval est nécessaire pour supprimer les pages liées
    private $pagesBook;
   
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var smallint
     *
     * @ORM\Column(name="number", type="smallint", unique=true)
     */
    private $number;
    

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50)
     */
    private $title;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pagesBook = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set number
     *
     * @param integer $number
     * @return Chapter
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Chapter
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Add pagesBook
     *
     * @param \Apa\StoryBundle\Entity\PageBook $pagesBook
     * @return Chapter
     */
    public function addPagesBook(\Apa\StoryBundle\Entity\PageBook $pagesBook)
    {
        $this->pagesBook[] = $pagesBook;

        return $this;
    }

    /**
     * Remove pagesBook
     *
     * @param \Apa\StoryBundle\Entity\PageBook $pagesBook
     */
    public function removePagesBook(\Apa\StoryBundle\Entity\PageBook $pagesBook)
    {
        $this->pagesBook->removeElement($pagesBook);
    }

    /**
     * Get pagesBook
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPagesBook()
    {
        return $this->pagesBook;
    }
}
