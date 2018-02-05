<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 */
class Region
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $maxmembers;


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
     * @return Region
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
     * Set maxmembers
     *
     * @param integer $maxmembers
     * @return Region
     */
    public function setMaxmembers($maxmembers)
    {
        $this->maxmembers = $maxmembers;

        return $this;
    }

    /**
     * Get maxmembers
     *
     * @return integer
     */
    public function getMaxmembers()
    {
        return $this->maxmembers;
    }
}
