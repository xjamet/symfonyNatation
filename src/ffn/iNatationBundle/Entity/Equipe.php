<?php

namespace ffn\iNatationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe", indexes={@ORM\Index(name="IDX_2449BA156B21C9D2", columns={"idclub"})})
 * @ORM\Entity
 */
class Equipe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idequipe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="equipe_idequipe_seq", allocationSize=1, initialValue=1)
     */
    private $idequipe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_equipe", type="string", length=45, nullable=false)
     */
    private $nomEquipe;

    /**
     * @var \Club
     *
     * @ORM\ManyToOne(targetEntity="Club")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idclub", referencedColumnName="idclub")
     * })
     */
    private $idclub;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Nageuse", mappedBy="idequipe")
     */
    private $idnageuse;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idnageuse = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idequipe.
     *
     * @return int
     */
    public function getIdequipe()
    {
        return $this->idequipe;
    }

    /**
     * Set nomEquipe.
     *
     * @param string $nomEquipe
     *
     * @return Equipe
     */
    public function setNomEquipe($nomEquipe)
    {
        $this->nomEquipe = $nomEquipe;

        return $this;
    }

    /**
     * Get nomEquipe.
     *
     * @return string
     */
    public function getNomEquipe()
    {
        return $this->nomEquipe;
    }

    /**
     * Set idclub.
     *
     * @param \ffn\iNatationBundle\Entity\Club|null $idclub
     *
     * @return Equipe
     */
    public function setIdclub(\ffn\iNatationBundle\Entity\Club $idclub = null)
    {
        $this->idclub = $idclub;

        return $this;
    }

    /**
     * Get idclub.
     *
     * @return \ffn\iNatationBundle\Entity\Club|null
     */
    public function getIdclub()
    {
        return $this->idclub;
    }

    /**
     * Add idnageuse.
     *
     * @param \ffn\iNatationBundle\Entity\Nageuse $idnageuse
     *
     * @return Equipe
     */
    public function addIdnageuse(\ffn\iNatationBundle\Entity\Nageuse $idnageuse)
    {
        $this->idnageuse[] = $idnageuse;

        return $this;
    }

    /**
     * Remove idnageuse.
     *
     * @param \ffn\iNatationBundle\Entity\Nageuse $idnageuse
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdnageuse(\ffn\iNatationBundle\Entity\Nageuse $idnageuse)
    {
        return $this->idnageuse->removeElement($idnageuse);
    }

    /**
     * Get idnageuse.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdnageuse()
    {
        return $this->idnageuse;
    }
}
