<?php

namespace IntranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * notes
 *
 * @ORM\Table(name="notes")
 * @ORM\Entity(repositoryClass="IntranetBundle\Repository\notesRepository")
 */
class notes
{

    /**
    * @ORM\ManyToOne(targetEntity="EntityBundle\Entity\User", inversedBy="notes")
    * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
    **/
    private $user;

    /**
    * @ORM\ManyToOne(targetEntity="matieres", inversedBy="notes")
    * @ORM\JoinColumn(name="id_matieres", referencedColumnName="id")
    **/
    private $matieres;

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
     * @ORM\Column(name="points", type="integer", nullable=true)
     */
    private $points;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaires", type="string", nullable=true)
     */
    private $commentaires;

    /**
     * @var string
     *
     * @ORM\Column(name="project", type="string", nullable=false)
     */
    private $project;

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
     * Set project
     *
     * @param string $project
     *
     * @return notes
     */
    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return string
     */
    public function getProject()
    {
        return $this->project;
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

    /**
     * Set commentaires
     *
     * @param integer $commentaires
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
     * @return int
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }


    /**
     * Set user
     *
     * @param \EntityBundle\Entity\User $user
     *
     * @return notes
     */
    public function setUser(\EntityBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \EntityBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set matieres
     *
     * @param \IntranetBundle\Entity\matieres $matieres
     *
     * @return notes
     */
    public function setMatieres(\IntranetBundle\Entity\matieres $matieres = null)
    {
        $this->matieres = $matieres;

        return $this;
    }

    /**
     * Get matieres
     *
     * @return \IntranetBundle\Entity\matieres
     */
    public function getMatieres()
    {
        return $this->matieres;
    }
}
