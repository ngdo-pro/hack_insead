<?php

namespace ServiceBundle\Entity;

/**
 * PriceRange
 */
class PriceRange
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $low;

    /**
     * @var string
     */
    private $medium;

    /**
     * @var string
     */
    private $high;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set low
     *
     * @param string $low
     *
     * @return PriceRange
     */
    public function setLow($low)
    {
        $this->low = $low;

        return $this;
    }

    /**
     * Get low
     *
     * @return string
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * Set medium
     *
     * @param string $medium
     *
     * @return PriceRange
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;

        return $this;
    }

    /**
     * Get medium
     *
     * @return string
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * Set high
     *
     * @param string $high
     *
     * @return PriceRange
     */
    public function setHigh($high)
    {
        $this->high = $high;

        return $this;
    }

    /**
     * Get high
     *
     * @return string
     */
    public function getHigh()
    {
        return $this->high;
    }
    /**
     * @var \ServiceBundle\Entity\Service
     */
    private $service;


    /**
     * Set service
     *
     * @param \ServiceBundle\Entity\Service $service
     *
     * @return PriceRange
     */
    public function setService(\ServiceBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \ServiceBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }

    public function __toString()
    {
        return $this->price;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $services;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->services = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add service
     *
     * @param \ServiceBundle\Entity\Service $service
     *
     * @return PriceRange
     */
    public function addService(\ServiceBundle\Entity\Service $service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * Remove service
     *
     * @param \ServiceBundle\Entity\Service $service
     */
    public function removeService(\ServiceBundle\Entity\Service $service)
    {
        $this->services->removeElement($service);
    }

    /**
     * Get services
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServices()
    {
        return $this->services;
    }
    /**
     * @var string
     */
    private $range;


    /**
     * Set range
     *
     * @param string $range
     *
     * @return PriceRange
     */
    public function setRange($range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * Get range
     *
     * @return string
     */
    public function getRange()
    {
        return $this->range;
    }
    /**
     * @var string
     */
    private $price;


    /**
     * Set price
     *
     * @param string $price
     *
     * @return PriceRange
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
