<?php

namespace ffn\iNatationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pariticipation
 *
 * @ORM\Table(name="pariticipation", indexes={@ORM\Index(name="IDX_356D9340F417B9", columns={"idequipe"}), @ORM\Index(name="IDX_356D934BCEAC9B", columns={"idballet"})})
 * @ORM\Entity
 */
class Pariticipation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idparticipation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pariticipation_idparticipation_seq", allocationSize=1, initialValue=1)
     */
    private $idparticipation;

    /**
     * @var float
     *
     * @ORM\Column(name="resultat", type="float", precision=10, scale=0, nullable=true)
     */
    private $resultat;

    /**
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idequipe", referencedColumnName="idequipe")
     * })
     */
    private $idequipe;

    /**
     * @var \Ballet
     *
     * @ORM\ManyToOne(targetEntity="Ballet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idballet", referencedColumnName="idballet")
     * })
     */
    private $idballet;



    /**
     * Get idparticipation.
     *
     * @return int
     */
    public function getIdparticipation()
    {
        return $this->idparticipation;
    }

    /**
     * Set resultat.
     *
     * @param float|null $resultat
     *
     * @return Pariticipation
     */
    public function setResultat($resultat = null)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat.
     *
     * @return float|null
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set idequipe.
     *
     * @param \ffn\iNatationBundle\Entity\Equipe|null $idequipe
     *
     * @return Pariticipation
     */
    public function setIdequipe(\ffn\iNatationBundle\Entity\Equipe $idequipe = null)
    {
        $this->idequipe = $idequipe;

        return $this;
    }

    /**
     * Get idequipe.
     *
     * @return \ffn\iNatationBundle\Entity\Equipe|null
     */
    public function getIdequipe()
    {
        return $this->idequipe;
    }

    /**
     * Set idballet.
     *
     * @param \ffn\iNatationBundle\Entity\Ballet|null $idballet
     *
     * @return Pariticipation
     */
    public function setIdballet(\ffn\iNatationBundle\Entity\Ballet $idballet = null)
    {
        $this->idballet = $idballet;

        return $this;
    }

    /**
     * Get idballet.
     *
     * @return \ffn\iNatationBundle\Entity\Ballet|null
     */
    public function getIdballet()
    {
        return $this->idballet;
    }
}
