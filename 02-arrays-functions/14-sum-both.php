<?php

require __DIR__ . "/vendor/autoload.php";

function sum($numArr){
    $sum = 0;
    foreach($numArr as $num){
        $sum += $num;
    };
    return $sum;
};

function sumBoth($arr1,$arr2){
    return sum($arr1) + sum($arr2);
};

dump(
    sumBoth([2, 3, 4, 5, 6], [1, 2, 3, 4]), // 30
    sumBoth([2, 3, 4, 5, 6], [5, 10, 12]), // 47
);