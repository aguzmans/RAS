<?php

namespace Osd\RetireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="WorkerStatus")
 */
class WorkerStatus
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idWorkerStatus;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $description;   

    /**
     * Get idWorkerStatus
     *
     * @return integer 
     */
    public function getIdWorkerStatus()
    {
        return $this->idWorkerStatus;
    }
    /**
     * @ORM\OneToMany(targetEntity="Worker", mappedBy="WorkerStatus")
     */
    protected $Workers;

    public function __construct()
    {
        $this->Workers = new ArrayCollection();
    }
    /**
     * Set description
     *
     * @param string $description
     * @return WorkerStatus
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add Workers
     *
     * @param \Osd\RetireBundle\Entity\Worker $workers
     * @return WorkerStatus
     */
    public function addWorker(\Osd\RetireBundle\Entity\Worker $workers)
    {
        $this->Workers[] = $workers;
    
        return $this;
    }

    /**
     * Remove Workers
     *
     * @param \Osd\RetireBundle\Entity\Worker $workers
     */
    public function removeWorker(\Osd\RetireBundle\Entity\Worker $workers)
    {
        $this->Workers->removeElement($workers);
    }

    /**
     * Get Workers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWorkers()
    {
        return $this->Workers;
    }
}