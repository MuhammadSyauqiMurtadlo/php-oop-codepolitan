<?php

class User
{
  var $firstName;
  var $lastName;
  var $username;

  function fullname()
  {
    return $this->firstName . " " . $this->lastName;
  }
}

class Customer extends User {}

$customer1 = new Customer();
$customer1->firstName = "John";
$customer1->lastName = "Doe";

echo $customer1->fullname(); // Outputs: John Doe

if (is_subclass_of($customer1, "User")) {
  echo "customer1 is a subclass of User";
} else {
  echo "customer1 is NOT a subclass of User";
}

$parent = class_parents($customer1);
echo implode(", ", $parent); // Outputs: User
