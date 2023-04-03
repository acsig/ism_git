<?php
namespace ism;

class ourBigClass
{
    private $sStatus;
    private $iCount;
    private $fValue;
    
    
    public static function echoMsg($sMsg)
    {
        echo $sMsg;
    }
    
    /**
     * @return mixed
     */
    public function getSStatus()
    {
        return $this->sStatus;
    }

    /**
     * @return mixed
     */
    public function getICount()
    {
        return $this->iCount;
    }

    /**
     * @param mixed $sStatus
     */
    public function setSStatus($sStatus)
    {
        $this->sStatus = $sStatus;
    }

    /**
     * @param mixed $iCount
     */
    public function setICount($iCount)
    {
        $this->iCount = $iCount;
    }

    public function __construct()
    {
        
    }
    
}


