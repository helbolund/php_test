<?php

class Person {
  public $firstName;
  public $lastName;

  public function getFullName() {
      return $this->firstName . ' ' . $this->lastName;
  }

  public function sayHello() {
      echo "Hello, my name is " . $this->getFullName() . ".";
  }
}

?>