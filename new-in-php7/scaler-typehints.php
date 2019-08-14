<?php

// Strict types => No cohertion like 1 == true or '30' == 30;
declare(strict_types=1);

function setAge(int $age){
  var_dump($age);
}

setAge(30);

function setIsValid(bool $valid){
  var_dump($valid);
}