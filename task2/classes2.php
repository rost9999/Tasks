<?php
function nowTime()
{
    echo 'Сейчас: ' . date("G:m:s");
}

class Cow
{
    protected $legs = 4;

    protected function say()
    {
        NowTime();
        echo " МУ" . PHP_EOL;
    }

    function get_legs()
    {
        echo "у меня $this->legs ног";
    }
}

class Dog
{
    protected $legs = 4;

    function say()
    {
        NowTime();
        echo " ГАВ" . PHP_EOL;
    }

    function get_legs()
    {
        echo "у меня $this->legs ног";
    }
}

class Bird
{
    protected $legs = 2;

    function get_legs()
    {
        echo "у меня $this->legs ног";
    }
}


$cow1 = new Cow;
$dog1 = new Dog;
$nird1 = new Bird;

$cow1->say();
echo "\n";
$dog1->say();
echo "\n";
$cow1->get_legs();
echo "\n";
$dog1->get_legs();
echo "\n";
$nird1->get_legs();




