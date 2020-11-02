<?php

require __DIR__ . "/vendor/autoload.php";

function average($numArr){
    $sum = 0;
    foreach($numArr as $num){
        $sum += $num;
    };
    return $sum / count($numArr);
};

dump(
    average([2, 3, 4, 5, 6]), // 4
    average([2, 3]), // 2.5
    average([10, 30]), // 20
    average([-4, -8, -9]), // -7
);