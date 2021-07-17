<?php




class Animal {
    function say(){

    }
}


class Cow extends Animal{
    function say(){
        echo "МУ";
    }
}


class Dog extends Animal{
    function say(){
        echo "ГАВ";
    }
}


$cow1 = new Cow;
$dog1 = new Dog;

$cow1->say();
echo "<br>";
$dog1->say();