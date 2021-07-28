<?php

/*
 * Polymorphism class:
 *
 * */

interface Mobile {
    public function pressHome();
}

class Iphone implements Mobile {
    public $name;
    public function pressHome() {}
}

class Sony implements Mobile {
    public $name;
    public function pressHome() {}
}