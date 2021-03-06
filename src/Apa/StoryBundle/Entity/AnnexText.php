<?php

namespace Apa\StoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnnexText
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Apa\StoryBundle\Entity\AnnexTextRepository")
 */
class AnnexText
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50)
     */
    private $title;

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
     * @return AnnexText
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
     * Set title
     *
     * @param string $title
     * @return AnnexText
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
     * Set id
     *
     * @param integer $id
     * @return AnnexText
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
