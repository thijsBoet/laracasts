<?php

function gauB($n)
{
  return is_int($n) && $n>= 1 ? ($n/2) * ceil(($n+($n+1)) / 2) : false;
}

function f($n) {
  $nums = [];
  if(is_int($n) && $n > 0){
    for($i=1; $i<=$n; $i++){
      array_push($nums, $i);
    }
    return array_sum($nums);
  }
  return false;
}

echo gauB(100);