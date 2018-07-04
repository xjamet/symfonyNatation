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


    /**
     * Get idnotation.
     *
     * @return int
     */
    public function getIdnotation()
    {
        return $this->idnotation;
    }

    /**
     * Set note.
     *
     * @param float $note
     *
     * @return Notation
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note.
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set idparticipation.
     *
     * @param \ffn\iNatationBundle\Entity\Pariticipation|null $idparticipation
     *
     * @return Notation
     */
    public function setIdparticipation(\ffn\iNatationBundle\Entity\Pariticipation $idparticipation = null)
    {
        $this->idparticipation = $idparticipation;

        return $this;
    }

    /**
     * Get idparticipation.
     *
     * @return \ffn\iNatationBundle\Entity\Pariticipation|null
     */
    public function getIdparticipation()
    {
        return $this->idparticipation;
    }

    /**
     * Set idjuge.
     *
     * @param \ffn\iNatationBundle\Entity\Juge|null $idjuge
     *
     * @return Notation
     */
    public function setIdjuge(\ffn\iNatationBundle\Entity\Juge $idjuge = null)
    {
        $this->idjuge = $idjuge;

        return $this;
    }

    /**
     * Get idjuge.
     *
     * @return \ffn\iNatationBundle\Entity\Juge|null
     */
    public function getIdjuge()
    {
        return $this->idjuge;
    }

    /**
     * Add idrole.
     *
     * @param \ffn\iNatationBundle\Entity\Role $idrole
     *
     * @return Notation
     */
    public function addIdrole(\ffn\iNatationBundle\Entity\Role $idrole)
    {
        $this->idrole[] = $idrole;

        return $this;
    }

    /**
     * Remove idrole.
     *
     * @param \ffn\iNatationBundle\Entity\Role $idrole
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdrole(\ffn\iNatationBundle\Entity\Role $idrole)
    {
        return $this->idrole->removeElement($idrole);
    }

    /**
     * Get idrole.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdrole()
    {
        return $this->idrole;
    }
}
