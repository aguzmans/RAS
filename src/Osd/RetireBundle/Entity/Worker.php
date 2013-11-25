<?php

namespace Osd\RetireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Worker")
 * @ORM\Entity(repositoryClass="Osd\RetireBundle\Entity\WorkerRepository")
 */
class Worker
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idWorker;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $omang;
        
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $workerTitle;
    
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $workerName;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $workerSurname;
    
    /**
     * @ORM\Column(type="date")
     */
    private $birthDay;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateOfEmployment;
    
    /**
     * @ORM\Column(type="string", length=30)
     */
    private $fileNumber;
    
    //date of retirement
    private $retireYear;
    //time to retirement
    private $timeToRetirement;
    
    //Time left in: Years, Months and days
    private $yearsLeft;
    private $monthsLetf;
    private $daysLeft;
    /**
     * @ORM\ManyToOne(targetEntity="WorkerStatus", inversedBy="Workers")
     * @ORM\JoinColumn(name="id_worker_status", referencedColumnName="idWorkerStatus")
     */
    protected $aIdWorkerStatus;
    /**
     * Get idWorker
     *
     * @return integer 
     */
    public function getIdWorker()
    {
        return $this->idWorker;
    }
    public function setIdWorker($idWorker)
    {
        $this->idWorker = $idWorker;
        
        return $this;
    }
    /**
     * Set omang
     *
     * @param string $omang 
     * @return Worker
     */
    public function setOmang($omang)
    {
        $this->omang = $omang;
    
        return $this;
    }

    /**
     * Get omang
     *
     * @return string 
     */
    public function getOmang()
    {
        return $this->omang;
    }

    /**
     * Set workerTitle
     *
     * @param string $workerTitle
     * @return Worker
     */
    public function setWorkerTitle($workerTitle)
    {
        $this->workerTitle = $workerTitle;
    
        return $this;
    }

    /**
     * Get workerTitle
     *
     * @return string 
     */
    public function getWorkerTitle()
    {
        return $this->workerTitle;
    }

    /**
     * Set workerName
     *
     * @param string $workerName
     * @return Worker
     */
    public function setWorkerName($workerName)
    {
        $this->workerName = $workerName;
    
        return $this;
    }

    /**
     * Get workerName
     *
     * @return string 
     */
    public function getWorkerName()
    {
        return $this->workerName;
    }

    /**
     * Set workerSurname
     *
     * @param string $workerSurname
     * @return Worker
     */
    public function setWorkerSurname($workerSurname)
    {
        $this->workerSurname = $workerSurname;
    
        return $this;
    }

    /**
     * Get workerSurname
     *
     * @return string 
     */
    public function getWorkerSurname()
    {
        return $this->workerSurname;
    }

    /**
     * Set birthDay
     *
     * @param \DateTime $birthDay
     * @return Worker
     */
    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;
    
        return $this;
    }

    /**
     * Get birthDay
     *
     * @return \DateTime 
     */
    public function getBirthDay()
    {   
        return $this->birthDay;
    }

    /**
     * Set dateOfEmployment
     *
     * @param \DateTime $dateOfEmployment
     * @return Worker
     */
    public function setDateOfEmployment($dateOfEmployment)
    {
        $this->dateOfEmployment = $dateOfEmployment;
    
        return $this;
    }

    /**
     * Get dateOfEmployment
     *
     * @return \DateTime 
     */
    public function getDateOfEmployment()
    {
        return $this->dateOfEmployment;
    }
   
    // Get date of retirement
    public function getRetireYear (){
        $this->retireYear = $this->getBirthDay()->add(new \DateInterval('P60Y'));
        return $this->retireYear;
    }
  
    // Get time left for retirement
    public function getTimeToRetirement (){
        // Date of today
        $today = new \DateTime('today');
        // Calculate date diff between today and retirement day.
        $this->timeToRetirement = $today->diff($this->retireYear);
        
        // Return the time to retirement time formated
        return $this->formatTimeInterval($this->timeToRetirement,
                '%r%Y years, %m months, %d days');
    }
    
    //Format the dateInterval numbers as integers and as string
    public function formatTimeInterval($aDateDif, $format){
        return $aDateDif->format($format);
    }
    
    public function getYearsLeft(){
        $aux = $this->birthDay->add(new \DateInterval('P60Y'));       
        //date today
        $today = new \DateTime('today');
        // Calculate date diff between today and retirement day.
        $this->yearsLeft = $today->diff($aux);                
        $aux2 = $this->formatTimeInterval($this->yearsLeft, '%r%Y');
        $this->birthDay->sub(new \DateInterval('P60Y'));
        return $aux2;
    }
    public function getMonthsLetf(){
        $aux = $this->birthDay->add(new \DateInterval('P60Y'));       
        //date today
        $today = new \DateTime('today');
        // Calculate date diff between today and retirement day.
        $this->monthsLetf = $today->diff($aux);        
        //$this->yearsLeft = $aDateDif; //('%r%Y');
        $aux2 = $this->formatTimeInterval($this->monthsLetf, '%m');
        $this->birthDay->sub(new \DateInterval('P60Y'));
        return $aux2;
    }
    public function getDaysLeft(){
        return $this->daysLeft;
    }

    /**
     * Set fileNumber
     *
     * @param string $fileNumber
     * @return Worker
     */
    public function setFileNumber($fileNumber)
    {
        $this->fileNumber = $fileNumber;
    
        return $this;
    }

    /**
     * Get fileNumber
     *
     * @return string 
     */
    public function getFileNumber()
    {
        return $this->fileNumber;
    }

    /**
     * Set aIdWorkerStatus
     *
     * @param \Osd\RetireBundle\Entity\WorkerStatus $aIdWorkerStatus
     * @return Worker
     */
    public function setAIdWorkerStatus(\Osd\RetireBundle\Entity\WorkerStatus $aIdWorkerStatus = null)
    {
        $this->aIdWorkerStatus = $aIdWorkerStatus;
    
        return $this;
    }

    /**
     * Get aIdWorkerStatus
     *
     * @return \Osd\RetireBundle\Entity\WorkerStatus 
     */
    public function getAIdWorkerStatus()
    {
        return $this->aIdWorkerStatus;
    }
}