<?php

function MyAutoloader($className)
{
  $path = __DIR__ . '/classes/' . $className . '.php';
  if (file_exists($path)) {
    require_once $path;
  }
}
spl_autoload_register('MyAutoloader');

$student = new Student();
echo $student->name . "<br/>"; // Outputs: Student