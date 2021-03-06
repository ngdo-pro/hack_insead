<?php

namespace ServiceBundle\Entity;

/**
 * Service
 */
class Service
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $likes;

    /**
     * @var string
     */
    private $menuImg;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $discount;

    /**
     * @var bool
     */
    private $specialOffer;

    /**
     * @var \DateTime
     */
    private $createdAt;


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
     * Set name
     *
     * @param string $name
     *
     * @return Service
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
     * Set address
     *
     * @param string $address
     *
     * @return Service
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return Service
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Service
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set likes
     *
     * @param integer $likes
     *
     * @return Service
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get likes
     *
     * @return int
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set menuImg
     *
     * @param string $menuImg
     *
     * @return Service
     */
    public function setMenuImg($menuImg)
    {
        $this->menuImg = $menuImg;

        return $this;
    }

    /**
     * Get menuImg
     *
     * @return string
     */
    public function getMenuImg()
    {
        return $this->menuImg;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Service
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
     * Set discount
     *
     * @param integer $discount
     *
     * @return Service
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set specialOffer
     *
     * @param boolean $specialOffer
     *
     * @return Service
     */
    public function setSpecialOffer($specialOffer)
    {
        $this->specialOffer = $specialOffer;

        return $this;
    }

    /**
     * Get specialOffer
     *
     * @return bool
     */
    public function getSpecialOffer()
    {
        return $this->specialOffer;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Service
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * @var \ServiceBundle\Entity\ServiceProvider
     */
    private $service_provider;


    /**
     * Set serviceProvider
     *
     * @param \ServiceBundle\Entity\ServiceProvider $serviceProvider
     *
     * @return Service
     */
    public function setServiceProvider(\ServiceBundle\Entity\ServiceProvider $serviceProvider = null)
    {
        $this->service_provider = $serviceProvider;

        return $this;
    }

    /**
     * Get serviceProvider
     *
     * @return \ServiceBundle\Entity\ServiceProvider
     */
    public function getServiceProvider()
    {
        return $this->service_provider;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $prices_range;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->prices_range = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pricesRange
     *
     * @param \ServiceBundle\Entity\PriceRange $pricesRange
     *
     * @return Service
     */
    public function addPricesRange(\ServiceBundle\Entity\PriceRange $pricesRange)
    {
        $this->prices_range[] = $pricesRange;

        return $this;
    }

    /**
     * Remove pricesRange
     *
     * @param \ServiceBundle\Entity\PriceRange $pricesRange
     */
    public function removePricesRange(\ServiceBundle\Entity\PriceRange $pricesRange)
    {
        $this->prices_range->removeElement($pricesRange);
    }

    /**
     * Get pricesRange
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPricesRange()
    {
        return $this->prices_range;
    }

    public function __toString()
    {
        return $this->name;
    }
    /**
     * @var \ServiceBundle\Entity\PriceRange
     */
    private $price_range;


    /**
     * Set priceRange
     *
     * @param \ServiceBundle\Entity\PriceRange $priceRange
     *
     * @return Service
     */
    public function setPriceRange(\ServiceBundle\Entity\PriceRange $priceRange = null)
    {
        $this->price_range = $priceRange;

        return $this;
    }

    /**
     * Get priceRange
     *
     * @return \ServiceBundle\Entity\PriceRange
     */
    public function getPriceRange()
    {
        return $this->price_range;
    }
    /**
     * @var string
     */
    private $category;


    /**
     * Set category
     *
     * @param string $category
     *
     * @return Service
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
}
