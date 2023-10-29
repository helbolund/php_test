<?php
use PHPUnit\Framework\TestCase;

require_once 'src/YourCode.php'; // Adjust the path accordingly

class YourCodeTest extends TestCase {
    public function testSomeFunction() {
        // Your test logic here
        $person1 = new Person();
        $person1->firstName = "John";
        $person1->lastName = "Doe";
        $this->expectOutputString('Hello, my name is John Doe.');
        $person1->sayHello(); // Output: Hello, my name is John Doe.
    }
}
