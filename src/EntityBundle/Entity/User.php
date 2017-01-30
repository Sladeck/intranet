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
    * @ORM\OneToMany(targetEntity="IntranetBundle\Entity\notes", mappedBy="user")
    **/
    protected $notes;

    public function __construct()
    {
        parent::__construct();
        // your own logic
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
}
