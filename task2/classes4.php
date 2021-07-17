<?php




class Animal {
    public $voice = 'Grr';
    public function say(){
        echo "$this->voice";
    }
}


class Cow extends Animal{
    public $voice = 'МУ';
}


class Dog extends Animal{
    public $voice = 'ГАВ';
}


$cow1 = new Cow;
$dog1 = new Dog;

$cow1->say();
echo "<br>";
$dog1->say();