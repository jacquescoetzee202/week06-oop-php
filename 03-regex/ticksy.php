<?php

require __DIR__ . "/vendor/autoload.php";

function trimmed($string){
    return preg_replace("/\s*/","",$string);
};

function validEmail($input){
    $email = trimmed($input);
    return filter_var($email, FILTER_VALIDATE_EMAIL);
};

dump(validEmail(" blahf   ")); // false
dump(validEmail(" blah@f")); // false
dump(validEmail("blah@ fish.horse")); // false
dump(validEmail(" blah@fish.horse")); // true
dump(validEmail("blah@fish.horse ")); // true
dump(validEmail(" blah@fish.horse ")); // true

// not working yet, need to look into it a bit more ! 