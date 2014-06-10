<?php

namespace VladyslavLysenko\SimpleTestFormBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 */
class Test
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $quantityOfQuestions;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $maxMark;

    /**
     * @return ArrayCollection
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * @param ArrayCollection $questions
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;
    }

    /**
     * @var ArrayCollection
     *
     */
    private $questions;

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
     * Set quantityOfQuestions
     *
     * @param integer $quantityOfQuestions
     * @return Test
     */
    public function setQuantityOfQuestions($quantityOfQuestions)
    {
        $this->quantityOfQuestions = $quantityOfQuestions;

        return $this;
    }

    /**
     * Get quantityOfQuestions
     *
     * @return integer 
     */
    public function getQuantityOfQuestions()
    {
        return $this->quantityOfQuestions;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Test
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
     * Set maxMark
     *
     * @param string $maxMark
     * @return Test
     */
    public function setMaxMark($maxMark)
    {
        $this->maxMark = $maxMark;

        return $this;
    }

    /**
     * Get maxMark
     *
     * @return string 
     */
    public function getMaxMark()
    {
        return $this->maxMark;
    }
}
