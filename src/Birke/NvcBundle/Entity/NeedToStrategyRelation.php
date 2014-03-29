<?php

namespace Birke\NvcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Birke\NvcBundle\Entity\NeedToStrategyRelation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Birke\NvcBundle\Repositories\NeedToStrategyRelationRepository")
 */
class NeedToStrategyRelation
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
     * @var Need
     *
     * @ORM\ManyToOne(targetEntity="Need", inversedBy="strategyConnections")
     */
    protected $need;

    /**
     * @var Strategy
     *
     * @ORM\ManyToOne(targetEntity="Strategy", inversedBy="needConnections")
     */
    protected $strategy;

    /**
     * @param Need $need
     */
    public function setNeed($need)
    {
        $this->need = $need;
    }

    /**
     * @return Need
     */
    public function getNeed()
    {
        return $this->need;
    }

    /**
     * @param Strategy $strategy
     */
    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @return Strategy
     */
    public function getStrategy()
    {
        return $this->strategy;
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
     * @return NeedToStrategyRelation
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
