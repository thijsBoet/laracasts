<?php

require 'vendor/autoload.php';

use Acne\Users\Person;
use Acne\Business;
use Acne\Staff;

$matthijs = new Person('Matthijs Boet');
$jeffrey = new Person('Jeffrey Way');

$staff = new Staff([$jeffrey, $matthijs]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());