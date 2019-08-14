<?php
	
class Math{
	// static methods break incapulation of instances
	public static function add(...$nums)
	{
		return array_sum($nums);
	}	
}

echo Math::add(1,2,3);

class Person {
	// static variables break incapulation of instances
	public static $age = 1;
	
	public function haveBirthday()
	{
		static::$age += 1;
	}
}

$joe = new Person;
$joe->haveBirthday;
$joe->haveBirthday;

$jane = new Person;
// $jane->haveBirthday();

echo Person::$age; // would be four instead of 2