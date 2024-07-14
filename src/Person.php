<?php

class Person {
  public $firstName;
  public $lastName;
  public $phone;
  public $shoeSize;

  public function getFullName() {
      return $this->firstName . ' ' . $this->lastName;
  }

  public function sayHello() {
      echo "Hello, my name is " . $this->getFullName() . ".";
  }

  public function getPhone() {
    return $this->phone;
  }

  public function getFootSize() {
    return $this->shoeSize;
  }
}

?>