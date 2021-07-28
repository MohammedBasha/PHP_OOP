<?php

/*
 * Abstract class:
 * Can't be instantiated = can't create an object from it.
 * Made fot other classes to inherit from it only.
 * Abstracted functions don't have body and can have arguments.
 * visibility markers should be at the same level or less and not higher in the inherited classes.
 *
 * */

abstract class makeDevice {
    public $ram;

    public function sayHello() {
        echo 'Say Hello ';
    }

    abstract public function sayBye($arg);
}

// Super class / main class / parent class
class appleDevice extends makeDevice {
    public function sayBye($ar) {
        echo ' ' . $ar;
    }
}

$newDevice = new appleDevice();
$newDevice->sayHello();
$newDevice->sayBye('h');

echo '<br>';
echo '<pre>';
var_dump($newDevice);
echo '</pre>';