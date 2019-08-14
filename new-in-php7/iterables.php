<?php

// must use callable function
function trigger(callable $callback){
  $callback();
}

trigger('sadf');

// must use iterable function
function dumpAll(iterable $items){
  foreach ($items as $item){
    var_dump($item);
  }
}

