<?php

class Student
{
  public static $instantCount = 0;

  static function __construct()
  {
    self::$instantCount++;
  }
}

class Elementary extends Student
{
  public $total = 3;
}

class Junior extends Student
{
  public $total = 2;
}

class Senior extends Student
{
  public $total = 4;
}

$elementary = new Elementary;
echo "Total Student Elementary: " . $elementary->total . "<br/>"; // Outputs: Total Student Elementary: 3
echo "Instant Count: " . Student::$instantCount . "<br/>"; // Outputs: Instant Count: 1