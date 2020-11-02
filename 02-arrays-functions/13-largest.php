<?php

require __DIR__ . "/vendor/autoload.php";

function largest($nums){
    $largest = $nums[0];
    foreach($nums as $num){
        $num > $largest ? $largest = $num : $largest = $largest;
    };
    return $largest;
};

dump(
    largest([2, 4, 6, 4, 7, 5]), // 7
    largest([-2, 4, 6, 4, 2, -7, 5]), // 6
    largest([-2, -4, -4, -7, -5]), // -2
);