<?php

class Person {

    public  $name, 
            $age, 
            $email;

    function __construct($name = 'nobody')
    {
        //  Initiate default values
        $this->name = $name;

        $this->age = 18;
        $this->email = '';
    }

    function sayHi() {

        return "Hi my name is $this->name";
    }
}

$p1  = new Person('John');
$p2 =  new Person;
$p3 =  new Person;

$p2->name = 'Jane';

echo $p1->sayHi() . "<br>";     //  John    
echo $p2->sayHi() . "<br>";     //  Jane
echo $p3->sayHi() . "<br>";     //  nobody