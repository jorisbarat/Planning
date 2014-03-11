<?php

namespace Iut\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilsateur
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Utilsateur
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

	/**
     * @var string
     *
     * @ORM\Column(name="passwd", type="string", length=255)
     */
    private $passwd;

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
     * Set nom
     *
     * @param string $nom
     * @return Utilsateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilsateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
     
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Get passwd
     *
     * @return string 
     */
     
    public function getPasswd()
    {
        return $this->passwd;
    }
    
    /**
     * Set passwd
     *
     * @param string $passwd
     * @return Utilsateur
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

}
