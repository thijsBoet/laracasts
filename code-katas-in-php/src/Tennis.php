<?php

class Tennis
{
  public function __construct(Player $player1, Player $player2) {
    $this->player1 = $player1;
    $this->player2 = $player2;
  }

  protected $lookup = [
    0 => 'Love',
    1 => 'Fifteen',
    2 => 'Thirty',
    3 => 'Forty',
  ];

  public function score()
  {
    if($this->hasAWinner())
    {
      return 'Win for ' . $this->winner()->name;
    }

    if($this->hasTheAdvantage())
    {
      return 'Advantage ' . $this->winner()->name;
    }

    if($this->inDeuce())
    {
      return 'Deuce';
    }

    return $this->generalScore();
  }

  private function tied()
  {
    return $this->player1->points == $this->player2->points;
  }

  private function hasAWinner()
  {
    return $this->hasEnoughPointsToBeWon() && $this->isLeadingByTwo();
  }

  private function hasTheAdvantage()
  {
    return $this->hasEnoughPointsToBeWon() && $this->isLeadingByOne();
  }

  private function inDeuce()
  {
    return $this->player1->points + $this->player2->points >=6 && $this->tied();
  }

  private function hasEnoughPointsToBeWon()
  {
    return max([$this->player1->points, $this->player2->points]) >= 4;
  }

  private function isLeadingByOne()
  {
    return abs($this->player1->points - $this->player2->points) == 1;
  }

  private function isLeadingByTwo()
  {
    return abs($this->player1->points - $this->player2->points) >= 2;
  }

  private function generalScore()
  {
    $score = $this->lookup[$this->player1->points] . '-';
    return $score .= $this->tied() ? 'All' : $this->lookup[$this->player2->points];
  }

  private function winner()
  {
    return $this->player1->points > $this->player2->points
      ? $this->player1
      : $this->player2;
  }
}

class Player {

  public $name;

  public $points;

  public function __construct($name, $points)
  {
    $this->points = $points;
    $this->name = $name;
  }

  public function earnPoints($points)
  {
    $this->points = $points;
  }
}