<?php

function babySharkLyrics() {
  $str = '';
  $doo = ", doo doo doo doo doo doo\n";
  $subject = [
    'Baby shark',
    'Mommy shark',
    'Daddy shark',
    'Grandma shark',
    "Let's go hunt",
  ];
  for($i=0; $i<count($subject); $i++){
    $str .= str_repeat($subject[$i] . $doo, 3);
    $str .= $subject[$i] . "!\n";
  }
  echo $str . "Run away,…";
}

babySharkLyrics();