<?php

# PRIMITIVES ARE STRINGS, INTEGERS, BOOLEANS, FLOATS, NULL etc
# Wrap them in their own class only when:

// 1) It bring clarity?
// 2) There is behaviour associated with this concept?
// 3) Validation is necissary?    => like valid email address
// 4) Important domain concept?   => like longitude and laditude for google maps

class Location {
  public function __construct(float $laditude, float $longitude) {
    $this->laditude = $laditude;
    $this->longitude = $longitude;
  }
}

class EmailAddress {
  public function __construct($email) {
    if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
      throw new InvalidArgumentException("invalid email address");
    }
    $this->$email = $$email;
  }
  
}

class Second {
  protected $seconds;

  public function __construct($seconds) {
    $this->seconds = $seconds;
  }
}

function cache($data, Second $seconds){

}

cache([], new Second(50));