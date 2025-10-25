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
    return self::$totalStudents++;
  }
}

echo Student::$grades[2] . "<br/>"; // Outputs: SMA
Student::addStudent();
echo Student::motto() . "<br/>"; // Outputs: Learning is a never-ending process.

echo "Total Students:" . Student::count() . "<br/>"; // Outputs: Total Students:0


class PartTimeStudent extends Student {}

echo PartTimeStudent::$grades[1] . "<br/>"; // Outputs: SMP
echo PartTimeStudent::motto() . "<br/>";

PartTimeStudent::$grades[] = 'Kuliah Malam';
echo implode(", ", Student::$grades) . "<br/>"; // Outputs: SD, SMP, SMA, Kuliah Malam

Student::addStudent();
Student::addStudent();
PartTimeStudent::addStudent();

echo "Total Students:" . Student::count() . "<br/>"; // Outputs: Total Students:3
echo "Total Students (PartTimeStudent):" . PartTimeStudent::count() . "<br/>"; // Outputs: Total Students (PartTimeStudent):3