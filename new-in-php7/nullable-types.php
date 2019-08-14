<?php declare(strict_types=1);

class User 
{
  protected $age;

  public function __construct($age)
  {
    $this->age = $age;
  }

  // ?int null or integer allowed
  public function age() : ?int
  {
    return $this->age;
  }
}

$age = (new User(31))->age();

var_dump($age);