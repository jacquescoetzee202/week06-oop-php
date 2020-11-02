<?php

require __DIR__ . "/vendor/autoload.php";

function double($numArr){
    $doubleArr = [];
    foreach($numArr as $num){
        $doubleArr[] = $num + $num;
    };
    return $doubleArr;
};

dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);