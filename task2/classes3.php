<?php


class Cow {
    public $legs = 4;
    public function say(){
        nowTime();
        echo " МУ".PHP_EOL;
    }
    public function get_legs(){
        echo "у меня $this->legs ног";
    }
}


class Doctor {
    public function operate(Cow $animal){
        if ($animal->legs>0){
            $animal->legs -= 1;
        } else{
            throw new Exception('неоперируемая корова');
        }
        
    }
}

$cow1 = new Cow;
$cow2 = new Cow;
$doctor1 = new Doctor;

$cow1->get_legs();
echo "\n";
$cow2->get_legs();
echo "\n";
$doctor1->operate($cow2);
$doctor1->operate($cow2);
$cow1->get_legs();
echo "\n";
$cow2->get_legs();
echo "\n";
$doctor1->operate($cow2);
$doctor1->operate($cow2);
$cow1->get_legs();
echo "\n";
$cow2->get_legs();
echo "\n";
try {
    $doctor1->operate($cow2);
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}