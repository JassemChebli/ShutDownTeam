<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * support
 *
 * @ORM\Table(name="support")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\supportRepository")
 */
class support
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
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="formateur", type="string", length=255, nullable=true)
     */
    private $formateur;

    /**
     * @var int
     *
     * @ORM\Column(name="evaluation", type="smallint", nullable=true)
     */
    private $evaluation;

    /**
     * @var binary
     *
     * @ORM\Column(name="payant", type="binary", nullable=true)
     */
    private $payant;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", nullable=true)
     */
    private $prix;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return support
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return support
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
     * Set formateur
     *
     * @param string $formateur
     *
     * @return support
     */
    public function setFormateur($formateur)
    {
        $this->formateur = $formateur;

        return $this;
    }

    /**
     * Get formateur
     *
     * @return string
     */
    public function getFormateur()
    {
        return $this->formateur;
    }

    /**
     * Set evaluation
     *
     * @param integer $evaluation
     *
     * @return support
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
     * Set payant
     *
     * @param binary $payant
     *
     * @return support
     */
    public function setPayant($payant)
    {
        $this->payant = $payant;

        return $this;
    }

    /**
     * Get payant
     *
     * @return binary
     */
    public function getPayant()
    {
        return $this->payant;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return support
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @ORM\ManyToOne(targetEntity="theme")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $theme;

    /**
     * @return mixed
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param mixed $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
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
    private $proprietaire;

    /**
     * @return mixed
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * @param mixed $proprietaire
     */
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;
    }
}

