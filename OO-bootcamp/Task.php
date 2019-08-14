<?php

class Task{
  public $title;
  public $description;
  public $completed = false;

  public function __contruct($title, $description)
  {
    $this->title = $title;
    $this->description = $description;
  }

  public function complete()
  {
    $this->completed = true;
  }
}

$task = new Task('Learn OOP', 'Learn encapsulation, inheritance and othe Object Oriented concepts.');
$task2 = new Task('Do groceries', 'Buy milk, eggs, bread and butter');

$task2->complete();


var_dump($task2->title);
var_dump($task2->description);
var_dump($task2->completed);