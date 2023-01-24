<?php

class Animal
{
    public $name;
    public $color;

    public function __construct($animalName = "default",$animalColor = "default"){
        $this->name = $animalName;
        $this->colors = $animalColor;
    }

    public function sleep(){
        echo "Good Night";
    }

}

class Dog extends Animal
{
    public function greeding(){
        echo "Hello dog";
    }
}

$animal = new Animal('Pussi','brown');
$dog = new Dog('Aung Net');

echo $animal->name;
echo $animal->colors;



$dog->greeding(); // form Animal class
$animal->sleep(); //from Dog class
$dog->sleep();  // extent frm animal class
echo $dog->name;

