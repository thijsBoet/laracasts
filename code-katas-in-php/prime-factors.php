<?php

function primeFactors($number) {
  $primes = [];

  for($candidate = 2; $number > 1; $candidate++)
  {
    for (; number % $candidate == 0; $number /= $candidate) // reiterate $number
    {
      $primes[] = $candidate;
    }
  }
  return $primes;
}