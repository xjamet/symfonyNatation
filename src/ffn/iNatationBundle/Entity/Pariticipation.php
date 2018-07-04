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


}

