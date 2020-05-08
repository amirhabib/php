<?php

class Person {

    public  $name, 
            $age, 
            $email;

    function sayHi() {

        return "Hi my name is $this->name";
    }
}

$p1  = new Person;
$p2 =  new Person;

$p1->name = 'John';
$p2->name = 'Jane';

echo $p1->sayHi() . "<br>";
echo $p2->sayHi() . "<br>";