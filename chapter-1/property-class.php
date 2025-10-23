<?php

class Student
{

  var $name;
  var $country = 'None';
}

$student1 = new Student;
$student2 = new Student;

$student1->name = 'Hakim';
$student2->name = 'Luna';

echo $student1->name . ' is from ' . $student1->country . '</br>';
echo $student2->name . ' is from ' . $student2->country . '</br>';

$class_vars = get_class_vars('Student');
echo "Properties of Student class:</br>";
echo '<pre>';
print_r($class_vars);
echo '</pre>';

if (property_exists('Student', 'name')) {
  echo "Property 'name' exists in Student class.</br>";
} else {
  echo "Property 'name' does not exist in Student class.</br>";
}
