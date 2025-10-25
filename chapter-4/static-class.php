<?php

class Student
{
  public static $grades = ['SD', 'SMP', 'SMA'];
  private static $totalStudents = 0;

  public static function motto()
  {
    return "Learning is a never-ending process.";
  }

  public static function count()
  {
    return self::$totalStudents;
  }

  public static function addStudent()
  {
    return ++self::$totalStudents;
  }
}

echo Student::$grades[2] . "<br/>"; // Outputs: SMA
echo Student::motto() . "<br/>"; // Outputs: Learning is a never-ending process.

echo "Total Students:" . Student::count() . "<br/>"; // Outputs: Total Students:0