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

}

