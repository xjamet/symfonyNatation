<?php

namespace ffn\iNatationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competition
 *
 * @ORM\Table(name="competition", indexes={@ORM\Index(name="IDX_B50A2CB1D78124D", columns={"idorganisateur"})})
 * @ORM\Entity
 */
class Competition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcompetition", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="competition_idcompetition_seq", allocationSize=1, initialValue=1)
     */
    private $idcompetition;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_competition", type="string", length=45, nullable=false)
     */
    private $nomCompetition;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_competition", type="string", length=45, nullable=false)
     */
    private $lieuCompetition;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_competition", type="date", nullable=false)
     */
    private $dateCompetition;

    /**
     * @var \Organisateur
     *
     * @ORM\ManyToOne(targetEntity="Organisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idorganisateur", referencedColumnName="idorganisateur")
     * })
     */
    private $idorganisateur;

    public function getIdcompetition()
    {
      return $this->idcompetition;
    }
    public function setIdcompetition($idcompetition)
    {
        $this->idcompetition = $idcompetition;
    }
    public function getNomCompetition()
    {
        return $this->nomCompetition;
    }
    public function setNomCompetition($nomCompetition)
    {
        $this->nomCompetition = $nomCompetition;
    }
    public function getLieuCompetition()
    {
        return $this->lieuCompetition;
    }
    public function setLieuCompetition($lieuCompetition)
    {
        $this->lieuCompetition = $lieuCompetition;
    }
    public function getDateCompetition()
    {
        return $this->dateCompetition;
    }
    public  function setDateCompetition(\DateTime $DateCompetition = null)
    {
        $this->dateCompetition = $DateCompetition;
    }
    public function getIdorganisateur()
    {
        return $this->idorganisateur;
    }
    public function setIdorganisateur($idorganisateur)
    {
        $this->idorganisateur = $idorganisateur;
    }
}
