<?php

namespace MainBundle\Entity\Model;
use Doctrine\ORM\Mapping as ORM;

/**
 * Archivage
 *
 * @ORM\Table(name="archivage")
 * @ORM\Entity
 */
class Archivage
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
        * @ORM\Column(name="chemin", type="string", length=255)
        */
	private $Chemin;
        
        
	//private $refChemin;

	function __construct()
	{
	}

	function __destruct()
	{
	}




    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set chemin
     *
     * @param string $chemin
     *
     * @return Archivage
     */
    public function setChemin($chemin)
    {
        $this->Chemin = $chemin;

        return $this;
    }

    /**
     * Get chemin
     *
     * @return string
     */
    public function getChemin()
    {
        return $this->Chemin;
    }
}
