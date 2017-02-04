<?php
// src/AppBundle/Entity/User.php

namespace EntityBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\ManyToMany(targetEntity="IntranetBundle\Entity\matieres", inversedBy="users")
    * @ORM\JoinTable(name="users_matieres")
    **/
    protected $matieres;

    /**
    * @ORM\OneToMany(targetEntity="IntranetBundle\Entity\notes", mappedBy="user")
    **/
    protected $notes;

    public function __construct()
    {
        parent::__construct();
        $this->matieres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add note
     *
     * @param \IntranetBundle\Entity\notes $note
     *
     * @return User
     */
    public function addNote(\IntranetBundle\Entity\notes $note)
    {
        $this->notes[] = $note;

        return $this;
    }

    /**
     * Remove note
     *
     * @param \IntranetBundle\Entity\notes $note
     */
    public function removeNote(\IntranetBundle\Entity\notes $note)
    {
        $this->notes->removeElement($note);
    }

    /**
     * Get notes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set matieres
     *
     * @param \IntranetBundle\Entity\matieres $matieres
     *
     * @return User
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


    /**
     * Add matiere
     *
     * @param \IntranetBundle\Entity\matieres $matiere
     *
     * @return User
     */
    public function addMatiere(\IntranetBundle\Entity\matieres $matiere)
    {
        $this->matieres[] = $matiere;

        return $this;
    }

    /**
     * Remove matiere
     *
     * @param \IntranetBundle\Entity\matieres $matiere
     */
    public function removeMatiere(\IntranetBundle\Entity\matieres $matiere)
    {
        $this->matieres->removeElement($matiere);
    }
}
