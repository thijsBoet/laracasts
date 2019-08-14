<?php

abstract class Shape{
  protected $color;
  public function __construct($color = 'red')
  {
    $this->color = $color;
  }

  public function getColor()
  {
    return $this->color;
  }
}

class Square extends Shape{
  public $length;
  public function __construct($lenght)
  {
    $this->lenght = $lenght;
  }

  public function getArea()
  {
    return pow($this->length, 2);
  }
}

class Triangle extends Shape{
  public $base;
  public $length;
  public function __construct($base, $lenght)
  {
    $this->base = $base;
    $this->lenght = $lenght;
  }
  public function getArea()
  {
    return .5 * $this->base * $this->length;
  }
}

class Circle extends Shape{
  public $radius;
  public function __construct($radius)
  {
    $this->base = $radius;
  }
  public function getArea()
  {
    return M_PI * pow($this->radius, 2);
  }
}

echo (new Square('blue', 5))->getArea();
echo (new Triangle(5, 5))->getArea();
echo (new Circle('yellow', 7.5))->getArea();