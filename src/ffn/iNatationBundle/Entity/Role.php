<?php

namespace ffn\iNatationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role", indexes={@ORM\Index(name="IDX_57698A6A73CB5C1E", columns={"idcompetition"})})
 * @ORM\Entity
 */
class Role
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idrole", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="role_idrole_seq", allocationSize=1, initialValue=1)
     */
    private $idrole;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=45, nullable=false)
     */
    private $role;

    /**
     * @var \Competition
     *
     * @ORM\ManyToOne(targetEntity="Competition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcompetition", referencedColumnName="idcompetition")
     * })
     */
    private $idcompetition;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idnotation = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idrole.
     *
     * @return int
     */
    public function getIdrole()
    {
        return $this->idrole;
    }

    /**
     * Set role.
     *
     * @param string $role
     *
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set idcompetition.
     *
     * @param \ffn\iNatationBundle\Entity\Competition|null $idcompetition
     *
     * @return Role
     */
    public function setIdcompetition(\ffn\iNatationBundle\Entity\Competition $idcompetition = null)
    {
        $this->idcompetition = $idcompetition;

        return $this;
    }

    /**
     * Get idcompetition.
     *
     * @return \ffn\iNatationBundle\Entity\Competition|null
     */
    public function getIdcompetition()
    {
        return $this->idcompetition;
    }



}
