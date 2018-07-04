<?php

namespace ffn\iNatationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nageuse
 *
 * @ORM\Table(name="nageuse")
 * @ORM\Entity
 */
class Nageuse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idnageuse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="nageuse_idnageuse_seq", allocationSize=1, initialValue=1)
     */
    private $idnageuse;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_nageuse", type="string", length=45, nullable=false)
     */
    private $nomNageuse;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_nageuse", type="string", length=45, nullable=false)
     */
    private $prenomNageuse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedenaissance", type="date", nullable=false)
     */
    private $datedenaissance;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Equipe", inversedBy="idnageuse")
     * @ORM\JoinTable(name="faitparti",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idnageuse", referencedColumnName="idnageuse")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idequipe", referencedColumnName="idequipe")
     *   }
     * )
     */
    private $idequipe;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idequipe = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idnageuse.
     *
     * @return int
     */
    public function getIdnageuse()
    {
        return $this->idnageuse;
    }

    /**
     * Set nomNageuse.
     *
     * @param string $nomNageuse
     *
     * @return Nageuse
     */
    public function setNomNageuse($nomNageuse)
    {
        $this->nomNageuse = $nomNageuse;

        return $this;
    }

    /**
     * Get nomNageuse.
     *
     * @return string
     */
    public function getNomNageuse()
    {
        return $this->nomNageuse;
    }

    /**
     * Set prenomNageuse.
     *
     * @param string $prenomNageuse
     *
     * @return Nageuse
     */
    public function setPrenomNageuse($prenomNageuse)
    {
        $this->prenomNageuse = $prenomNageuse;

        return $this;
    }

    /**
     * Get prenomNageuse.
     *
     * @return string
     */
    public function getPrenomNageuse()
    {
        return $this->prenomNageuse;
    }

    /**
     * Set datedenaissance.
     *
     * @param \DateTime $datedenaissance
     *
     * @return Nageuse
     */
    public function setDatedenaissance($datedenaissance)
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    /**
     * Get datedenaissance.
     *
     * @return \DateTime
     */
    public function getDatedenaissance()
    {
        return $this->datedenaissance;
    }

    /**
     * Add idequipe.
     *
     * @param \ffn\iNatationBundle\Entity\Equipe $idequipe
     *
     * @return Nageuse
     */
    public function addIdequipe(\ffn\iNatationBundle\Entity\Equipe $idequipe)
    {
        $this->idequipe[] = $idequipe;

        return $this;
    }

    /**
     * Remove idequipe.
     *
     * @param \ffn\iNatationBundle\Entity\Equipe $idequipe
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdequipe(\ffn\iNatationBundle\Entity\Equipe $idequipe)
    {
        return $this->idequipe->removeElement($idequipe);
    }

    /**
     * Get idequipe.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdequipe()
    {
        return $this->idequipe;
    }
}
