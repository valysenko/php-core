<?php

namespace VladyslavLysenko\SimpleTestFormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Variant
 */
class Variant
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;
    /**
     * @var Question
     */
    private $question;

    /**
     * @return Question
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param Question $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
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
     * Set description
     *
     * @param string $description
     * @return Variant
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
}
