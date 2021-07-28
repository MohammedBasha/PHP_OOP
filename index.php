<?php

/*
 *  Method chaining:
 *
 * */

class Mobile {
    public function sayMorning() {
        echo 'Good Morning <br>';
        return $this; // must return $this to make the chaining work
    }

    public function sayAfternoon() {
        echo 'Good Afternoon <br>';
        return $this; // must return $this to make the chaining work
    }

    public function sayEvening() {
        echo 'Good Evening <br>';
        return $this; // must return $this to make the chaining work
    }
}

$phone = new Mobile();

$phone->sayMorning()->sayAfternoon()->sayEvening();