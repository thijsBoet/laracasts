<?php

class Trnsltr{}   // bad
class Translator{}// good

$x = true;        // no x, i or y variables
$people = [];     // use describtive variable names

class UserRepo {} // bad
class UserRepository {} // good

$billingId;       // good Id is commen abbreviation
$fetchByBillingId;// better describes what the method/variable does

// Every method should do one thing

class Order {
  public function shipOrder() // too specific Order is redundant
  {

  }
}

$order->shipOrder(); // too specific Order is redundant