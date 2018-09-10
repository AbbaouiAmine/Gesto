<?php

namespace MainBundle\Entity\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourrierArrivee
 *
 * @ORM\Table(name="model_courrier_arrivee")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\Model\CourrierArriveeRepository")
 */
class CourrierArrivee
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
   * @ORM\OneToOne(targetEntity="MainBundle\Entity\Model\Archivage", cascade ={"persist"})
   * @ORM\JoinColumn (nullable=false)
   */
    private $archivage;

     /**
   * @ORM\OneToOne(targetEntity="MainBundle\Entity\Model\CategorieCourrier", cascade ={"persist"})
   * @ORM\JoinColumn (nullable=false)
   */
    private $categorie;

     /**
   * @ORM\OneToOne(targetEntity="MainBundle\Entity\Model\CopyCourrier", cascade ={"persist"})
   * @ORM\JoinColumn (nullable=false)
   */
    private $copy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_arrive", type="date")
     */
    private $dateArrive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateenvoi", type="date")
     */
    private $dateenvoi;

    /**
     * @var int
     *
     * @ORM\Column(name="delai_reponse", type="integer")
     */
    private $delaiReponse;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_arrivee", type="string", length=100)
     */
    private $numeroArrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_expediteur", type="string", length=255)
     */
    private $numeroExpediteur;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255)
     */
    private $observation;

   /**
   * @ORM\OneToOne(targetEntity="MainBundle\Entity\Model\PJ", cascade ={"persist"})
   * @ORM\JoinColumn (nullable=false)
   */
    private $pieceJoint;


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
     * Set archivage
     *
     * @param string $archivage
     *
     * @return CourrierArrivee
     */
    public function setArchivage($archivage)
    {
        $this->archivage = $archivage;

        return $this;
    }

    /**
     * Get archivage
     *
     * @return string
     */
    public function getArchivage()
    {
        return $this->archivage;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return CourrierArrivee
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set copy
     *
     * @param string $copy
     *
     * @return CourrierArrivee
     */
    public function setCopy($copy)
    {
        $this->copy = $copy;

        return $this;
    }

    /**
     * Get copy
     *
     * @return string
     */
    public function getCopy()
    {
        return $this->copy;
    }

    /**
     * Set dateArrive
     *
     * @param \DateTime $dateArrive
     *
     * @return CourrierArrivee
     */
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }

    /**
     * Get dateArrive
     *
     * @return \DateTime
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * Set dateenvoi
     *
     * @param \DateTime $dateenvoi
     *
     * @return CourrierArrivee
     */
    public function setDateenvoi($dateenvoi)
    {
        $this->dateenvoi = $dateenvoi;

        return $this;
    }

    /**
     * Get dateenvoi
     *
     * @return \DateTime
     */
    public function getDateenvoi()
    {
        return $this->dateenvoi;
    }

    /**
     * Set delaiReponse
     *
     * @param integer $delaiReponse
     *
     * @return CourrierArrivee
     */
    public function setDelaiReponse($delaiReponse)
    {
        $this->delaiReponse = $delaiReponse;

        return $this;
    }

    /**
     * Get delaiReponse
     *
     * @return int
     */
    public function getDelaiReponse()
    {
        return $this->delaiReponse;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return CourrierArrivee
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set numeroArrivee
     *
     * @param string $numeroArrivee
     *
     * @return CourrierArrivee
     */
    public function setNumeroArrivee($numeroArrivee)
    {
        $this->numeroArrivee = $numeroArrivee;

        return $this;
    }

    /**
     * Get numeroArrivee
     *
     * @return string
     */
    public function getNumeroArrivee()
    {
        return $this->numeroArrivee;
    }

    /**
     * Set numeroExpediteur
     *
     * @param string $numeroExpediteur
     *
     * @return CourrierArrivee
     */
    public function setNumeroExpediteur($numeroExpediteur)
    {
        $this->numeroExpediteur = $numeroExpediteur;

        return $this;
    }

    /**
     * Get numeroExpediteur
     *
     * @return string
     */
    public function getNumeroExpediteur()
    {
        return $this->numeroExpediteur;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return CourrierArrivee
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return CourrierArrivee
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set pieceJoint
     *
     * @param string $pieceJoint
     *
     * @return CourrierArrivee
     */
    public function setPieceJoint($pieceJoint)
    {
        $this->pieceJoint = $pieceJoint;

        return $this;
    }

    /**
     * Get pieceJoint
     *
     * @return string
     */
    public function getPieceJoint()
    {
        return $this->pieceJoint;
    }
}

