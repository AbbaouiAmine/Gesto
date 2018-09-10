<?php
namespace MainBundle\Entity\Model;
use Doctrine\ORM\Mapping as ORM;

/**
 * PJ
 *
 * @ORM\Table(name="pj")
 * @ORM\Entity
 */
class PJ
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
        * @ORM\Column(name="nature", type="string", length=55)
        */        
	private $nature;
        
        /**
        * @var string
        *
        * @ORM\Column(name="objet", type="string", length=55)
        */  
	private $objet;
        
	//private $ref;

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
     * Set nature
     *
     * @param string $nature
     *
     * @return PJ
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return string
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return PJ
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
}
