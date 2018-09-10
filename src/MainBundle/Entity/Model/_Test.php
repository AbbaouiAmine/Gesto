<?php

namespace MainBundle\Entity\Model;

use Doctrine\ORM\Mapping as ORM;
/******************************************************************
 * Types
 ******************************************************************
Available types: 
 * array, 
 * simple_array, 
 * json_array, 
 * object,
 * boolean, 
 * integer, 
 * smallint, 
 * bigint, 
 * string, 
 * text, 
 * datetime, 
 * datetimetz,
 * date, 
 * time, 
 * decimal, 
 * float, 
 * binary, 
 * blob, 
 * guid.
 */

/**
 * _Test
 *
 * @ORM\Table(name="model__test")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\Model\_TestRepository")
 */
class _Test
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
     * @ORM\Column(name="f1", type="string", length=255)
     */
    private $f1;

    /**
     * @var string
     *
     * @ORM\Column(name="f2", type="string", length=255, nullable=true, unique=true)
     */
    private $f2;


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
     * Set f1
     *
     * @param string $f1
     *
     * @return _Test
     */
    public function setF1($f1)
    {
        $this->f1 = $f1;

        return $this;
    }

    /**
     * Get f1
     *
     * @return string
     */
    public function getF1()
    {
        return $this->f1;
    }

    /**
     * Set f2
     *
     * @param string $f2
     *
     * @return _Test
     */
    public function setF2($f2)
    {
        $this->f2 = $f2;

        return $this;
    }

    /**
     * Get f2
     *
     * @return string
     */
    public function getF2()
    {
        return $this->f2;
    }
}

