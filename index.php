<?php

/*
 * Class & Object:
 * - Class is a Blueprint that you can create an Object from it.
 * - Class has properties (the variables) and methods (the functions).
 * Visibility markers for properties are: public, private, protected
 * "public" now is = "var" in PHP 4
 * - Object is a member in an application.
 * - class's property can have a default value or be assigned to a value in the Object declaration with:
 * >> $Object->property = value;
 * ($this) keyword: pseudo variable => refer to object
 * $this->property;
 * $this->method();
 *
 * (self) keyword: refer to current class
 * it access static class members
 * (self::CONSTANT) inside the class
 * or outside the class will be:
 * ClassName::CONSTANT; OR $Object::CONSTANT;
 * (::) is scope resolution operator
 *
 * Apple:
 * - Class: Apple Blueprint design.
 * - Object: iPhones that China made.
 * - Application: Apple store.
 *
 * Web application registration:
 * - Class: code to add new member.
 * - Object: the member.
 * - Application: web application registration.
 *
 * Blog system:
 * - Class: code to add new post, article, news.
 * - Object: the post, the article, the news.
 * - Application: blog system.
 * */

class appleDevice {
    // Properties:
    public $ram = '1 GB';
    public $inch = '3 Inches';
    public $space = '32 GB';
    public $color = 'Black';

    // Constants:
    const CHIP = 'A9';
    const MINCHARS = 5;

    // Methods:
    public function doubleHomePressed() {
        echo 'This device does not support this feature<br>';
        echo self::CHIP;
    }

    public function getSpecification() {
        echo 'This device ram is ' . $this->ram . '<br>';
        echo 'This device inch is ' . $this->inch . '<br>';
        echo 'This device space is ' . $this->space . '<br>';
        echo 'This device color is ' . $this->color . '<br>';
    }
}

$newiPhone6 = new appleDevice();

$newiPhone6->ram = '2 GB';
$newiPhone6->inch = '5 Inches';
$newiPhone6->space = '128 GB';
$newiPhone6->space = 'Blue';
$newiPhone6->doubleHomePressed();

echo 'CHIP: '. $newiPhone6::CHIP;
echo 'CHIP: '. appleDevice::CHIP;

$newiPhone7 = new appleDevice();
$newiPhone7->doubleHomePressed();

echo "<pre>";
var_dump($newiPhone6);
var_dump($newiPhone7);
echo "</pre>";