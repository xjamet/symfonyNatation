<?php

namespace ffn\iNatationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organisateur
 *
 * @ORM\Table(name="organisateur", indexes={@ORM\Index(name="IDX_4BD76D44DBDD131C", columns={"idutilisateur"})})
 * @ORM\Entity
 */
class Organisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idorganisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="organisateur_idorganisateur_seq", allocationSize=1, initialValue=1)
     */
    private $idorganisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="organisateurcol", type="string", length=45, nullable=true)
     */
    private $organisateurcol;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idutilisateur", referencedColumnName="idutilisateur")
     * })
     */
    private $idutilisateur;
    public function getIdorganisateur()
    {
        return $this->idorganisateur;
    }

    public function setIdOrganisateur($IdOrganisateur)
    {
        $this->idorganisateur = $IdOrganisateur;
    }

    public function getOrganisateurcol()
    {
        return $this->organisateurcol;
    }

    public function setOrganisateurcol($organisateurcol)
    {
        $this->organisateurcol = $organisateurcol;
    }

    public function IdUtilisateur()
    {
        return $this->idutilisateur;
    }

    public function setIdUtilisateur($IdUtilisateur)
    {
        $this->idutilisateur = $IdUtilisateur;
    }


    /**
     * Get idutilisateur.
     *
     * @return \ffn\iNatationBundle\Entity\Utilisateur|null
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }
}
