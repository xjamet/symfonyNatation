<?php

namespace ffn\iNatationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity
 */
class Club
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idclub", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="club_idclub_seq", allocationSize=1, initialValue=1)
     */
    private $idclub;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_club", type="string", length=45, nullable=false)
     */
    private $nomClub;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=45, nullable=false)
     */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="nomdirigeant", type="string", length=45, nullable=false)
     */
    private $nomdirigeant;



    /**
     * Get idclub.
     *
     * @return int
     */
    public function getIdclub()
    {
        return $this->idclub;
    }

    /**
     * Set nomClub.
     *
     * @param string $nomClub
     *
     * @return Club
     */
    public function setNomClub($nomClub)
    {
        $this->nomClub = $nomClub;

        return $this;
    }

    /**
     * Get nomClub.
     *
     * @return string
     */
    public function getNomClub()
    {
        return $this->nomClub;
    }

    /**
     * Set localisation.
     *
     * @param string $localisation
     *
     * @return Club
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation.
     *
     * @return string
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set nomdirigeant.
     *
     * @param string $nomdirigeant
     *
     * @return Club
     */
    public function setNomdirigeant($nomdirigeant)
    {
        $this->nomdirigeant = $nomdirigeant;

        return $this;
    }

    /**
     * Get nomdirigeant.
     *
     * @return string
     */
    public function getNomdirigeant()
    {
        return $this->nomdirigeant;
    }
}
