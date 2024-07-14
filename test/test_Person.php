<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Person.php'; // Adjust the path accordingly

class test_Person extends TestCase {
    public function testSomeFunction() {
        // Your test logic here
        $person1 = new Person();
        $person1->firstName = "John";
        $person1->lastName = "Doe";
        $this->expectOutputString('Hello, my name is John Doe.');
        $person1->sayHello(); // Output: Hello, my name is John Doe.
    }

    public function testPhoneNumber() {
        $person1 = new Person();
        $person1->phone = "86123456";
        $result = $person1->getPhone();
        $this->assertEquals("86123456", $result);
    }

    public function testShoeSize() {
        $person = new Person();
        $person->shoeSize = 42;
        $shoeSize = $person->getShoeSize();
        $this->assertEquals(42, $shoeSize);
    }
}
