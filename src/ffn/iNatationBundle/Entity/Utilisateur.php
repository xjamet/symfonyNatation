<?php

namespace ffn\iNatationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", indexes={@ORM\Index(name="IDX_1D1C63B363147962", columns={"iddroits"})})
 * @ORM\Entity
 */
class Utilisateur extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idutilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="utilisateur_idutilisateur_seq", allocationSize=1, initialValue=10)
     */
    protected $id;


    /**
     * @var \Droits
     *
     * @ORM\ManyToOne(targetEntity="Droits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddroits", referencedColumnName="iddroits")
     * })
     */
    private $iddroits;


    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Get idutilisateur.
     *
     * @return int
     */
    public function getIdutilisateur()
    {
        return $this->id;
    }

    /**
     * Set iddroits.
     *
     * @param \ffn\iNatationBundle\Entity\Droits|null $iddroits
     *
     * @return Utilisateur
     */
    public function setIddroits(\ffn\iNatationBundle\Entity\Droits $iddroits = null)
    {
        $this->iddroits = $iddroits;

        return $this;
    }

    /**
     * Get iddroits.
     *
     * @return \ffn\iNatationBundle\Entity\Droits|null
     */
    public function getIddroits()
    {
        return $this->iddroits;
    }



}
