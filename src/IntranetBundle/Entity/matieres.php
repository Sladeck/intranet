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
     * @ORM\OneToMany(targetEntity="matieres", mappedBy="notes")
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
    }

    /**
     * Add note
     *
     * @param \IntranetBundle\Entity\matieres $note
     *
     * @return matieres
     */
    public function addNote(\IntranetBundle\Entity\matieres $note)
    {
        $this->notes[] = $note;

        return $this;
    }

    /**
     * Remove note
     *
     * @param \IntranetBundle\Entity\matieres $note
     */
    public function removeNote(\IntranetBundle\Entity\matieres $note)
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
}
