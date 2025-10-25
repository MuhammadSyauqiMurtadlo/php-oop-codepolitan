<?php

class User
{
  public $firstName;
  public $lastName;
  public $username;

  protected $regID = 1001;
  private $level = 'User';

  function fullname()
  {
    return $this->firstName . " " . $this->lastName;
  }

  protected function sayProtect()
  {
    return "Hello, Protected";
  }

  private function sayPrivate()
  {
    return "Hello, Private";
  }
}

class Customer extends User
{
  // public function sayParent()
  // {
  //   return $this->sayPrivate();
  // }
}

$u = new User;
$u->firstName = "User";
$u->lastName = "Class";

// echo $u->$regID . "<br/>";
// echo $u->$level . "<br/>";

echo $u->fullname() . "<br/>";
// echo $u->sayProtect() . "<br/>";
// echo $u->sayPrivate() . "<br/>";
// echo $u->sayPrivate() . "<br/>";

// $customer1 = new Customer();
// $customer1->firstName = "John";
// $customer1->lastName = "Doe";

// echo $customer1->fullname(); // Outputs: John Doe
