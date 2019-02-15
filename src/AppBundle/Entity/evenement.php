<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\evenementRepository")
 */
class evenement
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
     * @var int
     *
     * @ORM\Column(name="nbr_participant", type="integer", nullable=true)
     */
    private $nbrParticipant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="text", nullable=true)
     */
    private $lien;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="evaluation", type="smallint", nullable=true)
     */
    private $evaluation;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", nullable=true)
     */
    private $prix;

    /**
     * @var binary
     *
     * @ORM\Column(name="premium", type="binary", nullable=true)
     */
    private $premium;

    /**
     * @var string
     *
     * @ORM\Column(name="formateur", type="string", length=255, nullable=true)
     */
    private $formateur;


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
     * @return evenement
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
     * Set nbrParticipant
     *
     * @param integer $nbrParticipant
     *
     * @return evenement
     */
    public function setNbrParticipant($nbrParticipant)
    {
        $this->nbrParticipant = $nbrParticipant;

        return $this;
    }

    /**
     * Get nbrParticipant
     *
     * @return int
     */
    public function getNbrParticipant()
    {
        return $this->nbrParticipant;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return evenement
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return evenement
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set lien
     *
     * @param string $lien
     *
     * @return evenement
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return evenement
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return evenement
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
     * Set evaluation
     *
     * @param integer $evaluation
     *
     * @return evenement
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
     * Set prix
     *
     * @param float $prix
     *
     * @return evenement
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
     * Set premium
     *
     * @param binary $premium
     *
     * @return evenement
     */
    public function setPremium($premium)
    {
        $this->premium = $premium;

        return $this;
    }

    /**
     * Get premium
     *
     * @return binary
     */
    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * Set formateur
     *
     * @param string $formateur
     *
     * @return evenement
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
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $organisateur;

    /**
     * @return mixed
     */
    public function getOrganisateur()
    {
        return $this->organisateur;
    }

    /**
     * @param mixed $organisateur
     */
    public function setOrganisateur($organisateur)
    {
        $this->organisateur = $organisateur;
    }

    /**
     * @ORM\ManyToOne(targetEntity="type_evenement")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $type;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}

