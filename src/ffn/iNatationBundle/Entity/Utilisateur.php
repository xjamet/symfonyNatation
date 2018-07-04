<?php

namespace ffn\iNatationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", indexes={@ORM\Index(name="IDX_1D1C63B363147962", columns={"iddroits"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idutilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="utilisateur_idutilisateur_seq", allocationSize=1, initialValue=1)
     */
    private $idutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", nullable=false)
     */
    private $password;

    /**
     * @var \Droits
     *
     * @ORM\ManyToOne(targetEntity="Droits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddroits", referencedColumnName="iddroits")
     * })
     */
    private $iddroits;


}

