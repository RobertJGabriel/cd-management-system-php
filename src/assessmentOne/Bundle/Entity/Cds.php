<?php

namespace assessmentOne\Bundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="Cds")
 *
 */

class Cds{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $Id;


    /**
     * @ORM\Column(type="string",length=100)
     */
    protected $name;


    /**
     * @ORM\Column(type="string",length=200)
     */
    protected $song;

    /**
     * @ORM\Column(type="string",length=300)
     */
    protected $story;


    /**
     * @ORM\Column(type="string",length=100)
     */
    protected $price;




    /**
     * Get Id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->Id;
    }


    /**
     * Set Id
     *
     * @param integer $id
     * @return Cds
     */
    public function setId($id)
    {
        $this->Id = $id;

        return $this;
    }




    /**
     * Set name
     *
     * @param string $name
     * @return Cds
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
     * Set song
     *
     * @param string $song
     * @return Cds
     */
    public function setSong($song)
    {
        $this->song = $song;

        return $this;
    }

    /**
     * Get song
     *
     * @return string
     */
    public function getSong()
    {
        return $this->song;
    }

    /**
     * Set story
     *
     * @param string $story
     * @return Cds
     */
    public function setStory($story)
    {
        $this->story = $story;

        return $this;
    }

    /**
     * Get story
     *
     * @return string
     */
    public function getStory()
    {
        return $this->story;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Cds
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }
}
