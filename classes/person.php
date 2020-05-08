<?php

class Person {

    public  $name, 
            $age, 
            $gender,
            $email;

    function __construct($name = 'nobody')
    {
        //  Initiate default values
        $this->name = $name;

        $this->age = 18;
        $this->gender = 'O';
        $this->email = 'default@email.com';
    }

    function sayHi() {

        return "Hi my name is $this->name";
    }


    function getGenderClassName() {
        $gender_class_name = "";

        switch($this->gender) {
            case "M": $gender_class_name  = "gender_m"; break;
            case "F": $gender_class_name  = "gender_f"; break;
        }

        return $gender_class_name;
    }
}
