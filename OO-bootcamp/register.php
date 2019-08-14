<?php 

require 'vendor/autoload.php';

$register = new Acne\RegisterUser;
$authController = new Acne\AuthController($register);

$authController->register();