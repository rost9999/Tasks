<?php


class Cow {
    protected $legs = 4;
    protected function say(){
        nowTime();
        echo " МУ".PHP_EOL;
    }
    protected function get_legs(){
        echo "у меня $this->legs ног";
    }
}


class Doctor {
    public function operate($animal){
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
echo "<br>";
$cow2->get_legs();
echo "<br>";
$doctor1->operate($cow2);
$doctor1->operate($cow2);
$cow1->get_legs();
echo "<br>";
$cow2->get_legs();
echo "<br>";
$doctor1->operate($cow2);
$doctor1->operate($cow2);
$cow1->get_legs();
echo "<br>";
$cow2->get_legs();
echo "<br>";
try {
    $doctor1->operate($cow2);
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}