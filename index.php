<?php

/*
 * Magic methods:
 * __construct();
 *  - Called when the object is created.
 *  - can be inherited
 *  - can have any arguments that be called in the object instantiation
 *
 * __destruct();
 *  - Called when the object is destroyed.
 *
 * __call($methodName, $arguments);
 *  - called when a methods not found or private
 *
 * __get($prop);
 *  - called when getting a property not accessible or not found.
 *  - accepting one parameter.
 *
 * __set($prop, $value);
 *  - called when setting a value to a property not accessible or not found.
 *  - accepting two parameters.
 *

 *
 *
 * */

class Greetings {
    private $name;
    private function sayAfternoon() { // private function will set error if used in another class
        echo 'Good afternoon <br>';
    }

    public function __destruct() { // will be fired when class is destroyed
        echo 'Good evening <br>';
    }

    public function __construct($n) { // will fired when class starts
        echo 'Good morning ' . $n . '<br>';
    }

    public function __call($method, $param) { // fired if the method not found or private
        echo 'Call to the method ' . $method . ' Not available<br>';
        print_r($param);
        echo '<br>';
    }

    public function __get($prop) { // fired if getting property not found or private
        echo 'The Property ' . $prop . ' is not found or not accessible <br>';
    }

    public function __set($prop, $val) { // fired when setting property not found or private
        echo 'The Property "' . $prop . '" is not found or not accessible and you cannot assigning "' . $val . '"as a value to it <br>';
    }
}

class newGreetings extends Greetings {}

$greetings = new newGreetings('Mohammed'); // making object of extended class
$greetings->sayAfternoon(); // calling a private method
$greetings->sayAfternoons('param 1', 'param 2', 'param 3'); // calling a not found methods with arguments
$greetings->name = 'Mohammed'; // setting a value to a not found property
$greetings->name2; // getting not found property

/*
 * Magic methods:
 * __clone();
 * - copying an object from another one without reference.
 *
 *
 * */

class Iphone { // making a class to clone
    public $name;
    public $email;

    public function __construct($n, $e) {
        $this->name = $n;
        $this->email = $e;
    }

    public function __clone() { // fired when cloning an object
        // $this->name = clone $this->name;
    }
}

$main = new Iphone('Mohammed', 'me@mohammedbasha.com');
//$copy = $main; // copying an object by reference
$copy = clone $main; // copying an object without reference

$main->name = 'Ahmed'; // changing the main object's name
$copy->name = 'Mahmoud'; // changing the copied object's name

echo '<pre>'; print_r($main); echo '</pre>'; // name will be Mahmoud not Ahmed
echo '<pre>'; print_r($copy); echo '</pre>'; // name will be Mahmoud