<?php

require __DIR__ . "/vendor/autoload.php";

function double($numArr){
    return collect($numArr)->map(fn($num) => $num + $num);
};



dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);