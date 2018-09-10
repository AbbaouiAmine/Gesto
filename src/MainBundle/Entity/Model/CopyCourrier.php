<?php
namespace MainBundle\Entity\Model;
use Doctrine\ORM\Mapping as ORM;

/**
 * CopyCourrier
 *
 * @ORM\Table(name="copycourrier")
 * @ORM\Entity
 */
class CopyCourrier
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
        * @ORM\Column(name="extention_copy", type="string", length=5)
        */
        private $extentionCopy;
        
        /**
        * @var string
        *
        * @ORM\Column(name="file_copy", type="blob")
        */
        private $fileCopy;
        
        //private $refCopy;

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
     * Set extentionCopy
     *
     * @param string $extentionCopy
     *
     * @return CopyCourrier
     */
    public function setExtentionCopy($extentionCopy)
    {
        $this->extentionCopy = $extentionCopy;

        return $this;
    }

    /**
     * Get extentionCopy
     *
     * @return string
     */
    public function getExtentionCopy()
    {
        return $this->extentionCopy;
    }

    /**
     * Set fileCopy
     *
     * @param string $fileCopy
     *
     * @return CopyCourrier
     */
    public function setFileCopy($fileCopy)
    {
        $this->fileCopy = $fileCopy;

        return $this;
    }

    /**
     * Get fileCopy
     *
     * @return string
     */
    public function getFileCopy()
    {
        return $this->fileCopy;
    }
}
