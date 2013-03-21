<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Inscription
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\InscriptionRepository")
 */
class Inscription
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
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string $prenom
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string $situation
     *
     * @ORM\Column(name="situation", type="string", length=255)
     */
    private $situation;

    /**
     * @var integer $id_organisation
     *
     * @ORM\Column(name="id_organisation", type="integer")
     * @ORM\ManyToOne(targetEntity="organisation", inversedBy="id")
     * @ORM\JoinColumn(name="organisation", referencedColumnName="id")
     */
    private $id_organisation;
    
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
     * Set id
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
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
     * Set situation
     *
     * @param string $situation
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;
    }

    /**
     * Get situation
     *
     * @return string 
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * Set id_organisation
     *
     * @param integer $idOrganisation
     */
    public function setIdOrganisation($idOrganisation)
    {
        $this->id_organisation = $idOrganisation;
    }

    /**
     * Get id_organisation
     *
     * @return integer 
     */
    public function getIdOrganisation()
    {
        return $this->id_organisation;
    }
    
    public function __toString() 
    {
        return $this->nom;
    }
}