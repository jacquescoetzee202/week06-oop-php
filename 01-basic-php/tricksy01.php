<?php

require __DIR__ . "/vendor/autoload.php";

for ($i = 1; $i <= 50; $i += 1){
    $sum = 0;
    $currentOdd = 1;
    for ($j = 1; $j <= $i; $j += 1){
        $sum += $currentOdd;
        $currentOdd += 2;
    };
    dump($sum);
};

