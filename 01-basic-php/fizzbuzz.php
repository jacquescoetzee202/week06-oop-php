<?php

require __DIR__ . "/vendor/autoload.php";


for ($i = 1; $i <= 100; $i += 1){
    $string = "";
    if ($i % 3 === 0){
        $string .= "Fizz";
    }
    if ($i % 5 === 0){
        $string .= "Buzz";
    }
    $string ? dump($string) : dump($i);
};
