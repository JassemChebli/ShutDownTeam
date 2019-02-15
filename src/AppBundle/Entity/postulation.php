<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * postulation
 *
 * @ORM\Table(name="postulation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\postulationRepository")
 */
class postulation
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
     * Set statut
     *
     * @param binary $statut
     *
     * @return postulation
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
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
     * @ORM\ManyToOne(targetEntity="collaborateur")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $collaborateur;

    /**
     * @return mixed
     */
    public function getCollaborateur()
    {
        return $this->collaborateur;
    }

    /**
     * @param mixed $collaborateur
     */
    public function setCollaborateur($collaborateur)
    {
        $this->collaborateur = $collaborateur;
    }

    /**
     * @ORM\ManyToOne(targetEntity="mission")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $mission;

    /**
     * @return mixed
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * @param mixed $mission
     */
    public function setMission($mission)
    {
        $this->mission = $mission;
    }
}

