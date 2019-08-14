<?php

class Person{

  protected $name;

  protected $age;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function setAge($age)
  {
    if($age < 18)
    {
      throw new Exception('Person needs to be 18 years or older');
    }
    $this->age = $age;
  }

  public function getAge()
  {
    return $this->age  * 365 . 'days old';
  }
}

$john = new Person('John');

$john->setAge('21');
var_dump($john->getAge());

var_dump($john);

