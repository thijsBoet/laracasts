<?php declare(strict_types=1);

class User {}

// Must return an instance of user
function getUser() : User{
  return new User;
}

// Must return bool value
function isValid() : bool{
  return true;
}

// Implementations of interface must return User
interface SomeInterface {
  public function getUser() :User;
}

class SomeClass implements SomeInterface{
  public function getUser(): User
  {
    return new User;
  }
}

(new SomeClass)->getUser();

getUser();
isValid();