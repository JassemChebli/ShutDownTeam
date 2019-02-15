<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * evaluation_evenement
 *
 * @ORM\Table(name="evaluation_evenement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\evaluation_evenementRepository")
 */
class evaluation_evenement
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
     * @ORM\Column(name="evaluation", type="smallint", nullable=true)
     */
    private $evaluation;


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
     * Set evaluation
     *
     * @param integer $evaluation
     *
     * @return evaluation_evenement
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    /**
     * Get evaluation
     *
     * @return int
     */
    public function getEvaluation()
    {
        return $this->evaluation;
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
}

