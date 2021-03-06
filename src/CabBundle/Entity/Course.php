<?php

namespace CabBundle\Entity;

/**
 * Course
 */
class Course
{
    public function __toString()
    {
     return $this->getDepartureDate();   // TODO: Implement __toString() method.
    }

    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $departureDate;

    /**
     * @var int
     */
    private $seatsAvailable;


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
     * Set departureDate
     *
     * @param \DateTime $departureDate
     *
     * @return Course
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Get departureDate
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Set seatsAvailable
     *
     * @param integer $seatsAvailable
     *
     * @return Course
     */
    public function setSeatsAvailable($seatsAvailable)
    {
        $this->seatsAvailable = $seatsAvailable;

        return $this;
    }

    /**
     * Get seatsAvailable
     *
     * @return int
     */
    public function getSeatsAvailable()
    {
        return $this->seatsAvailable;
    }
    /**
     * @var \CabBundle\Entity\Places
     */
    private $departure;

    /**
     * @var \CabBundle\Entity\Places
     */
    private $arrival;


    /**
     * Set departure
     *
     * @param \CabBundle\Entity\Places $departure
     *
     * @return Course
     */
    public function setDeparture(\CabBundle\Entity\Places $departure = null)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return \CabBundle\Entity\Places
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set arrival
     *
     * @param \CabBundle\Entity\Places $arrival
     *
     * @return Course
     */
    public function setArrival(\CabBundle\Entity\Places $arrival = null)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return \CabBundle\Entity\Places
     */
    public function getArrival()
    {
        return $this->arrival;
    }
    /**
     * @var \DateTime
     */
    private $departureTime;


    /**
     * Set departureTime
     *
     * @param \DateTime $departureTime
     *
     * @return Course
     */
    public function setDepartureTime($departureTime)
    {
        $this->departureTime = $departureTime;

        return $this;
    }

    /**
     * Get departureTime
     *
     * @return \DateTime
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;


    /**
     * Add user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Course
     */
    public function addUser(\UserBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \UserBundle\Entity\User $user
     */
    public function removeUser(\UserBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }
}
