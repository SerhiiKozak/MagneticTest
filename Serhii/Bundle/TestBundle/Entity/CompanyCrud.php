<?php

namespace Serhii\Bundle\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyCrud
 *
 * @ORM\Table(name="company_crud")
 * @ORM\Entity(repositoryClass="Serhii\Bundle\TestBundle\Repository\CompanyCrudRepository")
 */
class CompanyCrud
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="budget", type="integer")
     */
    private $budget;

    /**
     * @var int
     *
     * @ORM\Column(name="trafic_goal", type="integer")
     */
    private $trafic_goal;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string")
     */
    private $comment;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="start", type="date")
     */
    private $start;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="end", type="date")
     */
    private $end;

    /**
     * @var string
     *
     * @ORM\Column(name="landing_link", type="string")
     */
    private $landing_link;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set budget
     *
     * @param integer $budget
     *
     * @return CompanyCrud
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return int
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set traficGoal
     *
     * @param integer $traficGoal
     *
     * @return CompanyCrud
     */
    public function setTraficGoal($traficGoal)
    {
        $this->trafic_goal = $traficGoal;

        return $this;
    }

    /**
     * Get traficGoal
     *
     * @return int
     */
    public function getTraficGoal()
    {
        return $this->trafic_goal;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return CompanyCrud
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return CompanyCrud
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return CompanyCrud
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set landingLink
     *
     * @param string $landingLink
     *
     * @return CompanyCrud
     */
    public function setLandingLink($landingLink)
    {
        $this->landing_link = $landingLink;

        return $this;
    }

    /**
     * Get landingLink
     *
     * @return string
     */
    public function getLandingLink()
    {
        return $this->landing_link;
    }

}

