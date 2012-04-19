<?php

namespace VirtualStaff\ExamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VirtualStaff\ExamBundle\Entity\Record
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Record
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $usrnm
     *
     * @ORM\Column(name="usrnm", type="string", length=80)
     */
    private $usrnm;

    /**
     * @var string $fname
     *
     * @ORM\Column(name="fname", type="string", length=80)
     */
    private $fname;

    /**
     * @var string $lname
     *
     * @ORM\Column(name="lname", type="string", length=80)
     */
    private $lname;


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
     * Set usrnm
     *
     * @param string $usrnm
     */
    public function setUsrnm($usrnm)
    {
        $this->usrnm = $usrnm;
    }

    /**
     * Get usrnm
     *
     * @return string 
     */
    public function getUsrnm()
    {
        return $this->usrnm;
    }

    /**
     * Set fname
     *
     * @param string $fname
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    /**
     * Get fname
     *
     * @return string 
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    /**
     * Get lname
     *
     * @return string 
     */
    public function getLname()
    {
        return $this->lname;
    }
}