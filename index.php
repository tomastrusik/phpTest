<?php
// Parent class
abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro() : string;
}

// Child classes
class Audi extends Car {
    public function intro() : string {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car {
    public function intro() : string {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Car {
    public function intro() : string {
        return "French extravagance! I'm a $this->name!";
    }
}

interface Animal {
    public function makeSound(): string;
}

class Dog implements Animal {
    public function makeSound(): string
    {
        return "haf haf";
    }
}
class Cat implements Animal {
    public function makeSound(): string
    {
        return "mnau mnau";
    }
}


$dog = new Dog();
echo $dog->makeSound();
echo "<br>";

$cat = new Cat();
echo $cat->makeSound();
echo "<br>";

// Create objects from the child classes
$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new Citroen("Citroen");
echo $citroen->intro();

