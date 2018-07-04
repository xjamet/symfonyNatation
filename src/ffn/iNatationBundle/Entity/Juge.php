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
     * @ORM\ManyToOne(targetEntity="Role")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idrole", referencedColumnName="idrole")
     * })
     */
    private $idrole;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idutilisateur", referencedColumnName="idutilisateur")
     * })
     */
    private $idutilisateur;


}

