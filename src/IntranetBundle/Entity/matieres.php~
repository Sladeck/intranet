<?php

namespace IntranetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * matieres
 *
 * @ORM\Table(name="matieres")
 * @ORM\Entity(repositoryClass="IntranetBundle\Repository\matieresRepository")
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
    * @ORM\ManyToMany(targetEntity="EntityBundle\Entity\user", mappedBy="matieres")
    **/
    protected $users;

    /**
    * @ORM\OneToMany(targetEntity="notes", mappedBy="matieres")
    **/
    protected $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;


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
     * @return matieres
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
     * Constructor
     */
    public function __construct()
    {
        $this->notes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add note
     *
     * @param \IntranetBundle\Entity\notes $note
     *
     * @return matieres
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
     * @param \EntityBundle\Entity\User $matieres
     *
     * @return matieres
     */
    public function setMatieres(\EntityBundle\Entity\User $matieres = null)
    {
        $this->matieres = $matieres;

        return $this;
    }

    /**
     * Get matieres
     *
     * @return \EntityBundle\Entity\User
     */
    public function getMatieres()
    {
        return $this->matieres;
    }

    /**
     * Set user
     *
     * @param array $user
     *
     * @return matieres
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return array
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add user
     *
     * @param \EntityBundle\Entity\user $user
     *
     * @return matieres
     */
    public function addUser(\EntityBundle\Entity\user $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \EntityBundle\Entity\user $user
     */
    public function removeUser(\EntityBundle\Entity\user $user)
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
}
