<?php
 class Person {
    var $name;
    var $age;
    var $birthday = false;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
 }