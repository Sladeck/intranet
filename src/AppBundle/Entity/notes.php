<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * notes
 *
 * @ORM\Table(name="notes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\notesRepository")
 */
class notes
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
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="id_matieres", type="integer")
     */
    private $idMatieres;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaires", type="string", length=255)
     */
    private $commentaires;

    /**
     * @var int
     *
     * @ORM\Column(name="points", type="integer")
     */
    private $points;


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
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return notes
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idMatieres
     *
     * @param integer $idMatieres
     *
     * @return notes
     */
    public function setIdMatieres($idMatieres)
    {
        $this->idMatieres = $idMatieres;

        return $this;
    }

    /**
     * Get idMatieres
     *
     * @return int
     */
    public function getIdMatieres()
    {
        return $this->idMatieres;
    }

    /**
     * Set commentaires
     *
     * @param string $commentaires
     *
     * @return notes
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Get commentaires
     *
     * @return string
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set points
     *
     * @param integer $points
     *
     * @return notes
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }
}

