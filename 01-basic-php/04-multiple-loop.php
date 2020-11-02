<?php

require __DIR__ . "/vendor/autoload.php";

for ($i = 1; $i <= 1000; $i += 1){
    if ($i % 13 === 0){
        dump($i);
    };
};