<?php

require __DIR__ . "/vendor/autoload.php";

$multiplesOf3And7 = [];

$index = 0;

while (count($multiplesOf3And7) <= 117){
    if ($index % 3 === 0){
        array_push($multiplesOf3And7,$index);
    }
    if ($index % 7 === 0){
        array_push($multiplesOf3And7,$index);
    }
    $index += 1;
};

dump(array_sum($multiplesOf3And7));

// answer is incorrect should be 16107