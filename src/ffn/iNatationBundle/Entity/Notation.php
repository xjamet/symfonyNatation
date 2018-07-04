<?php

namespace ffn\iNatationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notation
 *
 * @ORM\Table(name="notation", indexes={@ORM\Index(name="IDX_268BC95D2CFF594", columns={"idparticipation"}), @ORM\Index(name="IDX_268BC95E34EFBD7", columns={"idjuge"})})
 * @ORM\Entity
 */
class Notation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idnotation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="notation_idnotation_seq", allocationSize=1, initialValue=1)
     */
    private $idnotation;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=false)
     */
    private $note;

    /**
     * @var \Pariticipation
     *
     * @ORM\ManyToOne(targetEntity="Pariticipation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idparticipation", referencedColumnName="idparticipation")
     * })
     */
    private $idparticipation;

    /**
     * @var \Juge
     *
     * @ORM\ManyToOne(targetEntity="Juge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idjuge", referencedColumnName="idjuge")
     * })
     */
    private $idjuge;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Role", inversedBy="idnotation")
     * @ORM\JoinTable(name="penalite",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idnotation", referencedColumnName="idnotation")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idrole", referencedColumnName="idrole")
     *   }
     * )
     */
    private $idrole;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idrole = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

