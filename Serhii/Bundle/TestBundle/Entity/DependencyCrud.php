<?php

namespace Serhii\Bundle\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DependencyCrud
 *
 * @ORM\Table(name="dependency_crud")
 * @ORM\Entity(repositoryClass="Serhii\Bundle\TestBundle\Repository\DependencyCrudRepository")
 */
class DependencyCrud
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
     * @ORM\Column(name="portrait_id", type="integer")
     */
    private $portrait_id;

    /**
     * @var int
     *
     * @ORM\Column(name="companu_id", type="integer")
     */
    public $companu_id;


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
     * Set portraitId
     *
     * @param integer $portraitId
     *
     * @return DependencyCrud
     */
    public function setPortraitId($portraitId)
    {
        $this->portrait_id = $portraitId;

        return $this;
    }

    /**
     * Get portraitId
     *
     * @return int
     */
    public function getPortraitId()
    {
        return $this->portrait_id;
    }

    /**
     * Set companuId
     *
     * @param integer $companuId
     *
     * @return DependencyCrud
     */
    public function setCompanuId($companuId)
    {
        $this->companu_id = $companuId;

        return $this;
    }

    /**
     * Get companuId
     *
     * @return int
     */
    public function getCompanuId()
    {
        return $this->companu_id;
    }
}

