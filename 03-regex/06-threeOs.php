<?php

require __DIR__ . "/vendor/autoload.php";

function threeOs($word){
    return preg_match("/[oO]{3,}/",$word) === 1;
}

dump(threeOs("Hello")); // false
dump(threeOs("Helloo")); // false
dump(threeOs("Hellooo")); // true
dump(threeOs("HelloOoOo")); // true