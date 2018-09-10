<?php

namespace MainBundle\Entity\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousUnite
 *
 * @ORM\Table(name="model_sous_unite")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\Model\SousUniteRepository")
 */
class SousUnite extends UniteAdministrative
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
   * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Model\UniteAdministrative")
   * @ORM\JoinColumn(nullable=false)
   */
    private $listUnitees;


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
     * Set listUnitees
     *
     * @param string $listUnitees
     *
     * @return SousUnite
     */
    public function setListUnitees($listUnitees)
    {
        $this->listUnitees = $listUnitees;

        return $this;
    }

    /**
     * Get listUnitees
     *
     * @return string
     */
    public function getListUnitees()
    {
        return $this->listUnitees;
    }
}

