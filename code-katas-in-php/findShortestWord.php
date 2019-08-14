<?php

function findShort($str){
  $words = explode(' ', $str);
  $longestWordLength =0;
  foreach ($words as $word){
    if(strlen($word) < $longestWordLength){
    $longestWordLength = strlen($word);
    }
  }
  return $longestWordLength;
}

echo findShort("bitcoin take over the world maybe who knows perhaps");
echo findShort("turns out random test cases are easier than writing out basic ones");