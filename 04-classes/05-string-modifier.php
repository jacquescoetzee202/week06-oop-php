<?php

require __DIR__ . "/vendor/autoload.php";

class Stringy {
    private $value;

    public function __construct($value){
        $this->value = $value;
    }

    public function lower(){
        return strtolower($this->value);
    }

    public function upper(){
        return strtoupper($this->value);
    }

    public function append($appendStr){
        return $this->value . $appendStr;
    }

    public function repeat($times){
        return str_repeat($this->value,$times);
    }

}

$string = new Stringy("Na");

// it can lowercase a string
dump($string->lower()); // "na"

// it can uppercase a string
dump($string->upper()); // "NA"

// it can concatenate
dump($string->append("blah")); // "Nablah"

// it can repeat a string
dump($string->repeat(5)); // "NaNaNaNaNa"