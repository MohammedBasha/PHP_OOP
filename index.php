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
    public $screen;
    public $touch;
    public $sound;
    public $camera;
    private $ram;

    public function changeRam($ramArg) {
        $this->ram = $ramArg;
    }
}

class appleDevice2 extends appleDevice {

}

$newiPhone6 = new appleDevice();
echo $newiPhone6->changeRam("1 GB");
// echo $newiPhone6->ram; // error

echo '<br>';
echo '<pre>';
var_dump($newiPhone6);
echo '</pre>';

$newiPhone7 = new appleDevice2();
echo $newiPhone7->changeRam("3 GB");

echo '<br>';
echo '<pre>';
var_dump($newiPhone7);
echo '</pre>';