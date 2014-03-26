<?php

namespace Iut\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DateActivity
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Iut\PlanningBundle\Entity\DateActivityRepository")
 */
class DateActivity
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
