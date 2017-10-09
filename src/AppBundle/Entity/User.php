<?php

namespace AppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type_user", type="string")
 * @ORM\DiscriminatorMap({"admin" = "User", "member" = "Member", "provider" = "Provider"})
 */

class User extends BaseUser
{

    const Type_USER = 'admin';
    const Type_PROVIDER = 'provider';
    const Type_MEMBER = 'member';


    public function __construct() {
        parent::__construct();
        $this->typeUser = User::Type_USER;
        $this->registration = new DateTime();
        $this->confirmReg = false;
        $this->enabled = false;
        $this->attempts = null;
        $this->images = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Image", mappedBy="user")
     */
    private $images;


    /**
     * @var string
     *
     * @ORM\Column(name="address_number", type="string", length=255, nullable=true)
     */
    private $addressNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="address_street", type="string", length=255, nullable=true)
     */
    private $addressStreet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registration", type="date")
     */
    private $registration;


    /**
     * @var int
     *
     * @ORM\Column(name="attempts", type="integer")
     */
    private $attempts;


    /**
     * @var bool
     *
     * @ORM\Column(name="confirm_reg", type="boolean")
     */
    private $confirmReg;


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
     * Set addressNumber
     *
     * @param string $addressNumber
     *
     * @return User
     */
    public function setAddressNumber($addressNumber)
    {
        $this->addressNumber = $addressNumber;

        return $this;
    }

    /**
     * Get addressNumber
     *
     * @return string
     */
    public function getAddressNumber()
    {
        return $this->addressNumber;
    }

    /**
     * Set addressStreet
     *
     * @param string $addressStreet
     *
     * @return User
     */
    public function setAddressStreet($addressStreet)
    {
        $this->addressStreet = $addressStreet;

        return $this;
    }

    /**
     * Get addressStreet
     *
     * @return string
     */
    public function getAddressStreet()
    {
        return $this->addressStreet;
    }

    /**
     * Set registration
     *
     * @param \DateTime $registration
     *
     * @return User
     */
    public function setRegistration($registration)
    {
        $this->registration = $registration;

        return $this;
    }

    /**
     * Get registration
     *
     * @return \DateTime
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * Set attempts
     *
     * @param integer $attempts
     *
     * @return User
     */
    public function setAttempts($attempts)
    {
        $this->attempts = $attempts;

        return $this;
    }

    /**
     * Get attempts
     *
     * @return int
     */
    public function getAttempts()
    {
        return $this->attempts;
    }


    /**
     * Set confirmReg
     *
     * @param boolean $confirmReg
     *
     * @return User
     */
    public function setConfirmReg($confirmReg)
    {
        $this->confirmReg = $confirmReg;

        return $this;
    }

    /**
     * Get confirmReg
     *
     * @return bool
     */
    public function getConfirmReg()
    {
        return $this->confirmReg;
    }
}

