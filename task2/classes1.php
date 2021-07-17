<?php


function NowTime(){
    echo "Сейчас: ".date("G:m:s");
}

class Cow {
    function say(){
        echo "МУ".PHP_EOL;
    }
}

class Dog {
    function say(){
        echo "ГАВ".PHP_EOL;
    }
}


$cow1 = new Cow;
$dog1 = new Dog;

$cow1->say();
$dog1->say();