<?php

class Mother{
  public function getEyeCount()
  {
    return 2;
  }
}

class Child extends Mother {

}

$offspring = new Child();

$offspring->getEyeCount();