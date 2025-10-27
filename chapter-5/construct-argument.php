<?php

class Student
{
  public static $instantCount = 0;

  public $total;
  public $target;

  static function __construct($total, $target)
  {
    self::$instantCount++;
    // $this->total = $total;
    // $this->target = $target;
  }
}

class Elementary extends Student
{
  public $total = 3;
  public $target = 5;
}

class Junior extends Student
{
  public $total = 2;
  public $target = 4;
}

class Senior extends Student
{
  public $total = 4;
  public $target = 6;
}

$elementary = new Elementary(3, 5);
echo "Total Student Elementary: " . $elementary->total . "<br/>"; // Outputs: Total Student Elementary: 3

$junior = new Junior(2, 4);
echo "Total Student Junior: " . $junior->total . "<br/>"; // Outputs: Total Student Junior: 2

$senior = new Senior(4, 6);
echo "Total Student Senior: " . $senior->total . "<br/>"; // Outputs: Total Student Senior: 4