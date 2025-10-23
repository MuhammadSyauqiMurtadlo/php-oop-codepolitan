<php

  class Student {

  }

  $student1=new Student();
  $student2=new Student();

  $classes=get_declared_classes();

  echo "Classes: " . implode(", ", $classes) . " \n";

  $classNames=['Product', 'Student' ];

  foreach ($classNames as $className) {
  if (class_exists($className)) {
  echo "Class '$className' exists.\n" ;
  } else {
  echo "Class '$className' does not exist.\n" ;
  }
  }