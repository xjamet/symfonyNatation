<?php

namespace ffn\iNatationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Droits
 *
 * @ORM\Table(name="droits")
 * @ORM\Entity
 */
class Droits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddroits", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="droits_iddroits_seq", allocationSize=1, initialValue=1)
     */
    private $iddroits;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=45, nullable=false)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="droit_acces", type="string", nullable=false)
     */
    private $droitAcces;



    /**
     * Get iddroits.
     *
     * @return int
     */
    public function getIddroits()
    {
        return $this->iddroits;
    }

    /**
     * Set commentaire.
     *
     * @param string $commentaire
     *
     * @return Droits
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire.
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set droitAcces.
     *
     * @param string $droitAcces
     *
     * @return Droits
     */
    public function setDroitAcces($droitAcces)
    {
        $this->droitAcces = $droitAcces;

        return $this;
    }

    /**
     * Get droitAcces.
     *
     * @return string
     */
    public function getDroitAcces()
    {
        return $this->droitAcces;
    }
}
