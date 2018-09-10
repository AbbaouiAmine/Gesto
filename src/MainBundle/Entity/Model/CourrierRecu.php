<?php

namespace MainBundle\Entity\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourrierRecu
 *
 * @ORM\Table(name="model_courrier_recu")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\Model\CourrierRecuRepository")
 */
class CourrierRecu
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
   * @ORM\OneToOne(targetEntity="MainBundle\Entity\Model\CourrierArrivee", cascade ={"persist"})
   * @ORM\JoinColumn (nullable=false)
   */
    private $courrier;

   /**
   * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Model\Expediteur")
   * @ORM\JoinColumn(nullable=false)
   */
    private $expedteur;


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
     * Set courrier
     *
     * @param string $courrier
     *
     * @return CourrierRecu
     */
    public function setCourrier($courrier)
    {
        $this->courrier = $courrier;

        return $this;
    }

    /**
     * Get courrier
     *
     * @return string
     */
    public function getCourrier()
    {
        return $this->courrier;
    }

    /**
     * Set expedteur
     *
     * @param string $expedteur
     *
     * @return CourrierRecu
     */
    public function setExpedteur($expedteur)
    {
        $this->expedteur = $expedteur;

        return $this;
    }

    /**
     * Get expedteur
     *
     * @return string
     */
    public function getExpedteur()
    {
        return $this->expedteur;
    }
}

