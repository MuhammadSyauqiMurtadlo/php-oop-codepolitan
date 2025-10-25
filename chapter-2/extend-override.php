<?php

class User
{
  var $firstName;
  var $lastName;
  var $username;

  function fullName()
  {
    return $this->firstName . " " . $this->lastName;
  }
}

class Customer extends User
{
  var $city;
  var $country;

  function location()
  {
    return $this->city . ", " . $this->country;
  }

  function fullName()
  {
    return parent::fullName();
  }
}

$customer1 = new Customer();
$customer1->firstName = "John";
$customer1->lastName = "Doe";
$customer1->city = "New York";
$customer1->country = "USA";

echo $customer1->fullName(); // Outputs: John Doe
echo $customer1->location(); // Outputs: New York, USA

if (is_subclass_of($customer1, "User")) {
  echo "customer1 is a subclass of User";
} else {
  echo "customer1 is NOT a subclass of User";
}

$parent = class_parents($customer1);
echo implode(", ", $parent); // Outputs: User
