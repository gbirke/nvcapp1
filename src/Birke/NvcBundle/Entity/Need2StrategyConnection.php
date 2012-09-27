<?php

namespace Birke\NvcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Birke\NvcBundle\Entity\Need2StrategyConnection
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Birke\NvcBundle\Repositories\Need2StrategyConnectionRepository")
 */
class Need2StrategyConnection
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
     * @var integer $score
     *
     * @ORM\Column(name="score", type="integer")
     */
    private $score;


    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\ManyToOne(targetEntity="Need", inversedBy="strategyConnections")
     */
    protected $needs;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\ManyToOne(targetEntity="Strategy", inversedBy="needConnections")
     */
    protected $strategies;

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $needs
     */
    public function setNeeds($needs)
    {
        $this->needs = $needs;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getNeeds()
    {
        return $this->needs;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $strategies
     */
    public function setStrategies($strategies)
    {
        $this->strategies = $strategies;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getStrategies()
    {
        return $this->strategies;
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
     * Set score
     *
     * @param integer $score
     * @return Need2StrategyConnection
     */
    public function setScore($score)
    {
        $this->score = $score;
    
        return $this;
    }

    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }
}
