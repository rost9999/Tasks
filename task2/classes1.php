<?php

function nowTime()
{
    echo 'Сейчас: ' . date("Y-m-d H:i:s");
}

class Cow
{
    protected function say()
    {
        echo 'МУ' . PHP_EOL;
    }
}

class Dog
{
    protected function say()
    {
        echo 'ГАВ' . PHP_EOL;
    }
}


$cow1 = new Cow;
$dog1 = new Dog;

$cow1->say();
$dog1->say();