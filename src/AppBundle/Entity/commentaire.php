<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\commentaireRepository")
 */
class commentaire
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
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

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
     * Set text
     *
     * @param string $text
     *
     * @return commentaire
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return commentaire
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set statut
     *
     * @param binary $statut
     *
     * @return commentaire
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
     * @ORM\ManyToOne(targetEntity="support")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $support;

    /**
     * @return mixed
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * @param mixed $support
     */
    public function setSupport($support)
    {
        $this->support = $support;
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

