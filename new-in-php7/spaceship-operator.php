<?php

$games = ['Call of duty', 'Unreal Tournament', 'Age of Empires', 'Rise of Nations', 'Half life'];

sort($games);
rsort($games);

// user defined sort alphabetically
usort($games, function($a, $b) {
  // <=> spaceship operator
  return $a <=> $b; // <=> if a<b return -1
                    // <=> if a==b return 0
                    // <=> if a>b return 1
});

var_dump($games);

// user defined sort reversed alphabetically
usort($games, function($a, $b){
  return $b <=> $a;
});

var_dump($games);

// user defined according to length
usort($games, function($a, $b){
  return strlen($a) <=> strlen($b);
});

var_dump($games);