<?php

namespace Apa\StoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageBook
 *
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="idsUnique", columns={"number", "chapter_id"})})
 * @ORM\Entity(repositoryClass="Apa\StoryBundle\Entity\PageBookRepository")
 */
class PageBook
{
    /**
     * @ORM\ManyToOne(targetEntity="Apa\StoryBundle\Entity\Chapter", inversedBy="pagesBook"))
     * @ORM\JoinColumn(nullable=false)
     */
    private $chapter;
    
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
     * @ORM\Column(name="number", type="smallint")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="contents", type="text")
     */
    private $contents;


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
     * Set contents
     *
     * @param string $contents
     * @return PageBook
     */
    public function setContents($contents)
    {
        $this->contents = $contents;

        return $this;
    }

    /**
     * Get contents
     *
     * @return string 
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Set chapter
     *
     * @param \Apa\StoryBundle\Entity\Chapter $chapter
     * @return PageBook
     */
    public function setChapter(\Apa\StoryBundle\Entity\Chapter $chapter)
    {
        $this->chapter = $chapter;

        return $this;
    }

    /**
     * Get chapter
     *
     * @return \Apa\StoryBundle\Entity\Chapter 
     */
    public function getChapter()
    {
        return $this->chapter;
    }

    /**
     * Set number
     *
     * @param integer $number
     * @return PageBook
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
}
