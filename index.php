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

// Super class / main class / parent class
class appleDevice {
    // Properties:
    public $ram = '1 GB';
    public $inch = '4 Inch';
    public $space = '16 GB';
    public $color = 'Silver';
    public $screen = 'LCD';
    public $name;

    // Methods:
    public function changeSpec($ra, $in, $sp, $co) {
        $this->ram = $ra;
        $this->inch = $in;
        $this->space = $sp;
        $this->color = $co;
    }

    final public function sayHello($na) {
        $this->name = $na;
        echo 'Welcome to ' . $na;
    }
}

// Sub class / child class
class Sony extends appleDevice {
    public $camera = '25 MB';

    public function sayHello($na) {
        $this->name = $na;
        echo 'Welcome to ' . $na . ' This is a new phone.';
    }
}

$newiPhone6 = new appleDevice();
$newiPhone6->changeSpec('3 GB', '5 Inch', '32 GB', 'Gold');
$newiPhone6->sayHello('Apple');

echo '<br>';
echo '<pre>';
var_dump($newiPhone6);
echo '</pre>';

$newiPhone7 = new Sony();
$newiPhone7->sayHello('Sony');

echo '<br>';
echo '<pre>';
var_dump($newiPhone7);
echo '</pre>';