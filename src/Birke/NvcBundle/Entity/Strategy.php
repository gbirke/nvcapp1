<?php

namespace Birke\NvcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Birke\NvcBundle\Entity\Strategy
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Birke\NvcBundle\Repositories\StrategyRepository")
 */
class Strategy
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
     * @var Need2StrategyConnection
     *
     * @ORM\OneToMany(targetEntity="Need2StrategyConnection", mappedBy="strategies" )
     */
    private $needConnections;

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
     * @return Strategy
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

    /**
     * @param \Birke\NvcBundle\Entity\Need2StrategyConnection $needConnections
     */
    public function setNeedConnections($needConnections)
    {
        $this->needConnections = $needConnections;
    }

    /**
     * @return \Birke\NvcBundle\Entity\Need2StrategyConnection
     */
    public function getNeedConnections()
    {
        return $this->needConnections;
    }


}
