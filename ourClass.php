<?php
namespace ism;

class ourBigClass
{
    private $sStatus;
    private $iCount;
    private $fValue;
    /*
     *  new comment
     */
    
    
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
    public function msgFormAcs()
    {
        return "hello Word";
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
class Car {

    private $car;
    private $model;


    public function __construct($car, $model) {
        $this->car = $car;
        $this->model = $model;

    }


    public function getCar() {
        return $this->car;
    }

    public function getModel() {
        return $this->model;
    }




    public function setCar($car) {
        $this->car = $car;
    }

    public function setAge($model) {
        $this->model = $model;
    }


}

function findMax($arr) {

    $max = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {

            $max = $arr[$i];
        }
    }


    return $max;
}
}


