<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\organisation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\organisationRepository")
 */
class organisation
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
     * @var string $mail
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string $nom_responsable
     *
     * @ORM\Column(name="nom_responsable", type="string", length=255)
     */
    private $nom_responsable;

    /**
     * @var string $prenom_responsable
     *
     * @ORM\Column(name="prenom_responsable", type="string", length=255)
     */
    private $prenom_responsable;

    /**
     * @ORM\OneToMany(targetEntity="Inscription", mappedBy="id", cascade={"remove", "persist"})
     */
    private $les_inscriptions;
    
    public function getLes_Inscriptions()
    {
        return $this->les_inscriptions;
    }
    
    public function setLes_Inscriptions($les_inscriptions)
    {
        $this->les_inscriptions = $les_inscriptions;
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
     * Set mail
     *
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set nom_responsable
     *
     * @param string $nomResponsable
     */
    public function setNomResponsable($nomResponsable)
    {
        $this->nom_responsable = $nomResponsable;
    }

    /**
     * Get nom_responsable
     *
     * @return string 
     */
    public function getNomResponsable()
    {
        return $this->nom_responsable;
    }

    /**
     * Set prenom_responsable
     *
     * @param string $prenomResponsable
     */
    public function setPrenomResponsable($prenomResponsable)
    {
        $this->prenom_responsable = $prenomResponsable;
    }

    /**
     * Get prenom_responsable
     *
     * @return string 
     */
    public function getPrenomResponsable()
    {
        return $this->prenom_responsable;
    }
    
    public function __toString() 
    {
        return $this->nom;
    }
}