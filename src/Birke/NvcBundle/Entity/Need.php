<?php

namespace Birke\NvcBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Birke\NvcBundle\Entity\Need
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Birke\NvcBundle\Repositories\NeedRepository")
 */
class Need
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Need2StrategyConnection", mappedBy="need")
     */
    private $strategyConnections;

    function __construct()
    {
        $this->strategyConnections = new ArrayCollection();
    }


    /**
     * @param ArrayCollection $strategyConnections
     */
    public function setStrategyConnections(ArrayCollection $strategyConnections)
    {
        $this->strategyConnections = $strategyConnections;
    }

    /**
     * @return ArrayCollection
     */
    public function getStrategyConnections()
    {
        return $this->strategyConnections;
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Need
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
