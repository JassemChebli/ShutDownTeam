<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\reclamationRepository")
 */
class reclamation
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
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var binary
     *
     * @ORM\Column(name="statut", type="binary", nullable=true)
     */
    private $statut;


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
     * Set description
     *
     * @param string $description
     *
     * @return reclamation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Set statut
     *
     * @param binary $statut
     *
     * @return reclamation
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get statut
     *
     * @return binary
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $user;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @ORM\ManyToOne(targetEntity="evenement")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $evenement;

    /**
     * @return mixed
     */
    public function getEvenement()
    {
        return $this->evenement;
    }

    /**
     * @param mixed $evenement
     */
    public function setEvenement($evenement)
    {
        $this->evenement = $evenement;
    }
}

