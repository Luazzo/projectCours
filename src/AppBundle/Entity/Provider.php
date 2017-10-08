<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provider
 *
 * @ORM\Table(name="provider")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProviderRepository")
 */
class Provider
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
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="email_company", type="string", length=255)
     */
    private $emailCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_company", type="string", length=255)
     */
    private $telCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="tva", type="string", length=255)
     */
    private $tva;


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
     * Set company
     *
     * @param string $company
     *
     * @return Provider
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return Provider
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set emailCompany
     *
     * @param string $emailCompany
     *
     * @return Provider
     */
    public function setEmailCompany($emailCompany)
    {
        $this->emailCompany = $emailCompany;

        return $this;
    }

    /**
     * Get emailCompany
     *
     * @return string
     */
    public function getEmailCompany()
    {
        return $this->emailCompany;
    }

    /**
     * Set telCompany
     *
     * @param string $telCompany
     *
     * @return Provider
     */
    public function setTelCompany($telCompany)
    {
        $this->telCompany = $telCompany;

        return $this;
    }

    /**
     * Get telCompany
     *
     * @return string
     */
    public function getTelCompany()
    {
        return $this->telCompany;
    }

    /**
     * Set tva
     *
     * @param string $tva
     *
     * @return Provider
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return string
     */
    public function getTva()
    {
        return $this->tva;
    }
}

