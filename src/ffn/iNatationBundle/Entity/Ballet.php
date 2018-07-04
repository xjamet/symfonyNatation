<?php

namespace ffn\iNatationBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ballet
 *
 * @ORM\Table(name="ballet", indexes={@ORM\Index(name="IDX_2F73013773CB5C1E", columns={"idcompetition"})})
 * @ORM\Entity
 */
class Ballet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idballet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ballet_idballet_seq", allocationSize=1, initialValue=1)
     */
    private $idballet;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=false)
     */
    private $description;

    /**
     * @var \Competition
     *
     * @ORM\ManyToOne(targetEntity="Competition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcompetition", referencedColumnName="idcompetition")
     * })
     */
    private $idcompetition;


}

