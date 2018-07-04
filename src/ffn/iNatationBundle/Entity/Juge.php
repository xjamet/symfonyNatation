<?php

namespace ffn\iNatationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Juge
 *
 * @ORM\Table(name="juge", indexes={@ORM\Index(name="IDX_30810A7784A67BCA", columns={"idrole"}), @ORM\Index(name="IDX_30810A77DBDD131C", columns={"idutilisateur"})})
 * @ORM\Entity
 */
class Juge
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idjuge", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="juge_idjuge_seq", allocationSize=1, initialValue=1)
     */
    private $idjuge;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_juge", type="string", length=45, nullable=false)
     */
    private $nomJuge;

    /**
     * @var \Role
     *
     * @ORM\ManyToOne(targetEntity="Role", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idrole", referencedColumnName="idrole")
     * })
     */
    private $idrole;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idutilisateur", referencedColumnName="idutilisateur")
     * })
     */
    private $idutilisateur;



    /**
     * Get idjuge.
     *
     * @return int
     */
    public function getIdjuge()
    {
        return $this->idjuge;
    }

    /**
     * Set nomJuge.
     *
     * @param string $nomJuge
     *
     * @return Juge
     */
    public function setNomJuge($nomJuge)
    {
        $this->nomJuge = $nomJuge;

        return $this;
    }

    /**
     * Get nomJuge.
     *
     * @return string
     */
    public function getNomJuge()
    {
        return $this->nomJuge;
    }

    /**
     * Set idrole.
     *
     * @param \ffn\iNatationBundle\Entity\Role|null $idrole
     *
     * @return Juge
     */
    public function setIdrole(\ffn\iNatationBundle\Entity\Role $idrole = null)
    {
        $this->idrole = $idrole;

        return $this;
    }

    /**
     * Get idrole.
     *
     * @return \ffn\iNatationBundle\Entity\Role|null
     */
    public function getIdrole()
    {
        return $this->idrole;
    }

    /**
     * Set idutilisateur.
     *
     * @param \ffn\iNatationBundle\Entity\Utilisateur|null $idutilisateur
     *
     * @return Utilisateur
     */
    public function setIdutilisateur(\ffn\iNatationBundle\Entity\Utilisateur $idutilisateur = null)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
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
