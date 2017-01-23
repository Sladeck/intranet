<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * matieres
 *
 * @ORM\Table(name="matieres")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\matieresRepository")
 */
class matieres
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
     * @ORM\Column(name="anglais", type="string", length=255)
     */
    private $anglais;

    /**
     * @var string
     *
     * @ORM\Column(name="chimie", type="string", length=255)
     */
    private $chimie;

    /**
     * @var string
     *
     * @ORM\Column(name="philosophie", type="string", length=255)
     */
    private $philosophie;

    /**
     * @var string
     *
     * @ORM\Column(name="sport", type="string", length=255)
     */
    private $sport;

    /**
     * @var string
     *
     * @ORM\Column(name="mathematiques", type="string", length=255)
     */
    private $mathematiques;


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
     * Set anglais
     *
     * @param string $anglais
     *
     * @return matieres
     */
    public function setAnglais($anglais)
    {
        $this->anglais = $anglais;

        return $this;
    }

    /**
     * Get anglais
     *
     * @return string
     */
    public function getAnglais()
    {
        return $this->anglais;
    }

    /**
     * Set chimie
     *
     * @param string $chimie
     *
     * @return matieres
     */
    public function setChimie($chimie)
    {
        $this->chimie = $chimie;

        return $this;
    }

    /**
     * Get chimie
     *
     * @return string
     */
    public function getChimie()
    {
        return $this->chimie;
    }

    /**
     * Set philosophie
     *
     * @param string $philosophie
     *
     * @return matieres
     */
    public function setPhilosophie($philosophie)
    {
        $this->philosophie = $philosophie;

        return $this;
    }

    /**
     * Get philosophie
     *
     * @return string
     */
    public function getPhilosophie()
    {
        return $this->philosophie;
    }

    /**
     * Set sport
     *
     * @param string $sport
     *
     * @return matieres
     */
    public function setSport($sport)
    {
        $this->sport = $sport;

        return $this;
    }

    /**
     * Get sport
     *
     * @return string
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * Set mathematiques
     *
     * @param string $mathematiques
     *
     * @return matieres
     */
    public function setMathematiques($mathematiques)
    {
        $this->mathematiques = $mathematiques;

        return $this;
    }

    /**
     * Get mathematiques
     *
     * @return string
     */
    public function getMathematiques()
    {
        return $this->mathematiques;
    }
}

