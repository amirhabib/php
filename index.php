<?php

require 'classes/person.php';


$p1  = new Person('John');
$p1->gender = 'M';

$p2 =  new Person;
$p2->name = 'Jane';
$p2->gender = 'F';

$p3 =  new Person;


$people = [$p1, $p2,  $p3];


require 'html.php';