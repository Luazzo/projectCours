<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locality
 *
 * @ORM\Table(name="locality")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LocalityRepository")
 */
class Locality
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Town
     *
     * @ORM\ManyToOne(targetEntity="Town", inversedBy="localities")
     * @ORM\JoinColumn(name="town", referencedColumnName="id")
     */
    public $town;

    /**
     * @var Zip
     *
     * @ORM\ManyToOne(targetEntity="Zip", inversedBy="localities")
     * @ORM\JoinColumn(name="zip", referencedColumnName="id")
     */
    public $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="locality", type="string", length=255)
     */
    private $locality;


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
     * Set locality
     *
     * @param string $locality
     *
     * @return Locality
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * Get locality
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }
}

