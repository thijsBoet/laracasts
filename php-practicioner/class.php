<?php
class Task {
	public $description;
	
	protected $completed = false;
	
	public function __construct($description)
	{
		// Automatically triggered on instanciation
		$this->description = $description;
	}
	
	public function complete()
	{
		$this->completed = true;
	}
	
	public function isComplete()
	{
		return $this->completed;
	}
}

$tasks = [
	new Task('Program todos app in php.'),
	new Task('Go to the score.'),
	new Task('Finish my screencast.'),
	new Task('Clean my room.'),
];

//dd($tasks);