<?php
namespace ism;

class ourBigClass
{
    private $sStatus;
    private $iCount;
    private $fValue;
    /*
     *  new comment from as on 25.4.2023
     *
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

class Person {
  // Declare the class attributes
  private $name;
  private $age;
  private $gender;

  // Define the constructor method
  public function __construct($name, $age, $gender) {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
  }

  // Define the getter methods
  public function getName() {
    return $this->name;
  }

  public function getAge() {
    return $this->age;
  }

  public function getGender() {
    return $this->gender;
  }

  // Define the setter methods
  public function setName($name) {
    $this->name = $name;
  }

  public function setAge($age) {
    $this->age = $age;
  }

  public function setGender($gender) {
    $this->gender = $gender;
  }
}

// Finding the maximum element in an array of numbers

function findMax($arr) {
    // Initialize a variable to store the maximum element
    $max = $arr[0];

    // Loop through the array and compare each element with the current maximum
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            // Update the maximum if a larger element is found
            $max = $arr[$i];
        }
    }

    // Return the maximum element
    return $max;
}
