<?php

// Object Composition

class Person {

    public $name;
    public $surname;
    public $age;

    public function __construct(String $_name, String $_surname, int $_age)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
    }

    public function sayHello()
    {
        echo "Ciao sono io";
    }
}


$persona1 = new Person("Mario", "Rossi", 34);

// var_dump($persona1);

$persona2 = new Person(12,12,"Pippo");

var_dump($persona2);

// Rispettare il tipo dei parametri: dependancy injection


// class Vehicle {
    
// }

// class Car extends Vehicle {

// } 

// Composizione -> stabilisco una relazione "ha-un" tra le classi.


?>