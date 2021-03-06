<?php

namespace CabBundle\Entity;

/**
 * CabDriver
 */
class CabDriver
{
    private $language;
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
    private $tel1;

    /**
     * @var string
     */
    private $tel2;

    /**
     * @var string
     */
    private $email;

    /**
     * @var bool
     */
    private $creditCardAccepted;


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
     * @return CabDriver
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
     * Set tel1
     *
     * @param string $tel1
     *
     * @return CabDriver
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1
     *
     * @return string
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     *
     * @return CabDriver
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2
     *
     * @return string
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return CabDriver
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
     * Set creditCardAccepted
     *
     * @param boolean $creditCardAccepted
     *
     * @return CabDriver
     */
    public function setCreditCardAccepted($creditCardAccepted)
    {
        $this->creditCardAccepted = $creditCardAccepted;

        return $this;
    }

    /**
     * Get creditCardAccepted
     *
     * @return bool
     */
    public function getCreditCardAccepted()
    {
        return $this->creditCardAccepted;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return CabDriver
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
