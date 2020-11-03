<?php

require __DIR__ . "/vendor/autoload.php";

class LightSwitch {
    private $onState = false;
    
    public function isOn(){
        return $this->onState;
    }

    public function turnOn(){
        $this->onState = true;
    }

    public function turnOff(){
        $this->onState = false;
    }
}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
dump($lightSwitch->isOn()); // false

// you can turn it on
$lightSwitch->turnOn();
dump($lightSwitch->isOn()); // true

// you can turn it off
$lightSwitch->turnOff();
dump($lightSwitch->isOn()); // false