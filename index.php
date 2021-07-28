<?php

spl_autoload_register(function($class) {
    require 'classes/' . $class . '.php';
});

$var = new Testing2();

print_r($var);