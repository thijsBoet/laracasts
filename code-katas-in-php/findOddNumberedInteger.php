<?php

function findIt(array $seq)
{
    // Enter your code here
    foreach ($seq as $int) {
      echo $int;
    }
}

findIt([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]);