<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * carteFidelites
 *
 * @ORM\Table(name="carte_fidelites")
 * @ORM\Entity(repositoryClass="MyApp\UserBundle\Repository\carteFidelitesRepository")
 */
class carteFidelites
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
     * @ORM\Column(name="dateCreationCarte", type="string", length=255)
     */
    private $dateCreationCarte;
    
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var float
     *
     * @ORM\Column(name="soldeCarte", type="float", nullable=true)
     */
    private $soldeCarte;

    /**
     * @var float
     *
     * @ORM\Column(name="evaluationCarte", type="float",  nullable=true)
     */
    private $evaluationCarte;


    /**
     *
     *
     * @ORM\ManyToOne (targetEntity="User")
     * @ORM\JoinColumn (name="client",referencedColumnName="id",onDelete="CASCADE")
     */
    private $client;
    
    /**
     *
     *
     * @ORM\ManyToOne (targetEntity="Boutiques")
     * @ORM\JoinColumn (name="boutique",referencedColumnName="id",onDelete="CASCADE")
     */
    private $boutique;
    
    public function __construct()
    {
        // generate identifier only once, here a 6 characters length code
        $this->code = substr(md5(uniqid(rand(), true)), 0, 12);
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }



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
     * Set dateCreationCarte
     *
     * @param string $dateCreationCarte
     *
     * @return carteFidelites
     */
    public function setDateCreationCarte($dateCreationCarte)
    {
        $this->dateCreationCarte = $dateCreationCarte;

        return $this;
    }

    /**
     * Get dateCreationCarte
     *
     * @return string
     */
    public function getDateCreationCarte()
    {
        return $this->dateCreationCarte;
    }

    /**
     * Set soldeCarte
     *
     * @param float $soldeCarte
     *
     * @return carteFidelites
     */
    public function setSoldeCarte($soldeCarte)
    {
        $this->soldeCarte = $soldeCarte;

        return $this;
    }

    /**
     * Get soldeCarte
     *
     * @return float
     */
    public function getSoldeCarte()
    {
        return $this->soldeCarte;
    }

    /**
     * Set evaluationCarte
     *
     * @param float $evaluationCarte
     *
     * @return carteFidelites
     */
    public function setEvaluationCarte($evaluationCarte)
    {
        $this->evaluationCarte = $evaluationCarte;

        return $this;
    }

    /**
     * Get evaluationCarte
     *
     * @return float
     */
    public function getEvaluationCarte()
    {
        return $this->evaluationCarte;
    }

    /**
     * Set idBoutique
     *
     * @param integer $idBoutique
     *
     * @return carteFidelites
     */
    public function setIdBoutique($idBoutique)
    {
        $this->idBoutique = $idBoutique;

        return $this;
    }

    /**
     * Get idBoutique
     *
     * @return int
     */
    public function getIdBoutique()
    {
        return $this->idBoutique;
    }

    /**
     * Set client
     *
     * @param \MyApp\UserBundle\Entity\User $client
     *
     * @return carteFidelites
     */
    public function setClient(\MyApp\UserBundle\Entity\User $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \MyApp\UserBundle\Entity\User
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set boutique
     *
     * @param \MyApp\UserBundle\Entity\Boutiques $boutique
     *
     * @return carteFidelites
     */
    public function setBoutique(\MyApp\UserBundle\Entity\Boutiques $boutique = null)
    {
        $this->boutique = $boutique;

        return $this;
    }

    /**
     * Get boutique
     *
     * @return \MyApp\UserBundle\Entity\Boutiques
     */
    public function getBoutique()
    {
        return $this->boutique;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return carteFidelites
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}
