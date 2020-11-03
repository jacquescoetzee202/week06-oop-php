<?php

require __DIR__ . "/vendor/autoload.php";

class Address {
    private $addressLine1;
    private $postCode;
    private $city;

    public function __construct($addressLine1,$postCode,$city){
        $this->addressLine1 = $addressLine1;
        $this->postCode = $postCode;
        $this->city = $city;
    }

    public function fullAddress(){
        return implode(", ",[$this->addressLine1,$this->city,$this->postCode]);
    }

    public function setStreet($input){
        $this->addressLine1 = $input;
    }

    public function setPostcode($input){
        $this->postCode = $input;
    }

    public function setTown($input){
        $this->city = $input;
    }
}

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
dump($address->fullAddress()); // "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
$address->setStreet("12 Cantelope Way");
$address->setPostcode("SW5 8RQ");
$address->setTown("Swansea");

// logs the new full address neatly
dump($address->fullAddress()); // "12 Cantelope Way, Swansea, SW5 8RQ"