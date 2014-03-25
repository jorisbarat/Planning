<?php

namespace Iut\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planifier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Iut\PlanningBundle\Entity\PlanifierRepository")
 */
class Planifier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Planning", type="integer")
     */
    private $planning;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer")
     */
    private $iduser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetimetz")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="heure", type="integer")
     */
    private $heure;


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
     * Set planning
     *
     * @param integer $planning
     * @return Planifier
     */
    public function setPlanning($planning)
    {
        $this->planning = $planning;

        return $this;
    }

    /**
     * Get planning
     *
     * @return integer 
     */
    public function getPlanning()
    {
        return $this->planning;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     * @return Planifier
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Planifier
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
     * Set heure
     *
     * @param integer $heure
     * @return Planifier
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return integer 
     */
    public function getHeure()
    {
        return $this->heure;
    }
}
