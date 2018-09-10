<?php

namespace MainBundle\Entity\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourrierAffecte
 *
 * @ORM\Table(name="model_courrier_affecte")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\Model\CourrierAffecteRepository")
 */
class CourrierAffecte
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
    private $courrierArrivee;

    /**
     * @var int
     *
     * @ORM\Column(name="delai_traitement", type="integer")
     */
    private $delaiTraitement;

   /**
   * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Model\Instruction")
   * @ORM\JoinColumn(nullable=false)
   */
    private $instructions;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255)
     */
    private $observation;

    /**
   * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Model\UniteAdministrative")
   * @ORM\JoinColumn(nullable=false)
   */
    private $uniteAdministrative;


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
     * Set courrierArrivee
     *
     * @param string $courrierArrivee
     *
     * @return CourrierAffecte
     */
    public function setCourrierArrivee($courrierArrivee)
    {
        $this->courrierArrivee = $courrierArrivee;

        return $this;
    }

    /**
     * Get courrierArrivee
     *
     * @return string
     */
    public function getCourrierArrivee()
    {
        return $this->courrierArrivee;
    }

    /**
     * Set delaiTraitement
     *
     * @param integer $delaiTraitement
     *
     * @return CourrierAffecte
     */
    public function setDelaiTraitement($delaiTraitement)
    {
        $this->delaiTraitement = $delaiTraitement;

        return $this;
    }

    /**
     * Get delaiTraitement
     *
     * @return int
     */
    public function getDelaiTraitement()
    {
        return $this->delaiTraitement;
    }

    /**
     * Set instructions
     *
     * @param string $instructions
     *
     * @return CourrierAffecte
     */
    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * Get instructions
     *
     * @return string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return CourrierAffecte
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
     * Set uniteAdministrative
     *
     * @param string $uniteAdministrative
     *
     * @return CourrierAffecte
     */
    public function setUniteAdministrative($uniteAdministrative)
    {
        $this->uniteAdministrative = $uniteAdministrative;

        return $this;
    }

    /**
     * Get uniteAdministrative
     *
     * @return string
     */
    public function getUniteAdministrative()
    {
        return $this->uniteAdministrative;
    }
}

