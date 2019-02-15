<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\reponseRepository")
 */
class reponse
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
     * @ORM\Column(name="reponse", type="text", nullable=true)
     */
    private $reponse;

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
     * Set reponse
     *
     * @param string $reponse
     *
     * @return reponse
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return string
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set statut
     *
     * @param binary $statut
     *
     * @return reponse
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
     * @ORM\ManyToOne(targetEntity="jeu")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $jeu;

    /**
     * @return mixed
     */
    public function getJeu()
    {
        return $this->jeu;
    }

    /**
     * @param mixed $jeu
     */
    public function setJeu($jeu)
    {
        $this->jeu = $jeu;
    }
}

