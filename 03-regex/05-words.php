<?php

require __DIR__ . "/vendor/autoload.php";

function words($sentance){
    return preg_split("/[,\s]+/",$sentance);
};

dump(words("This is a sentence")); // ["This", "is", "a", "sentence"]
dump(words("Hello, my name is Dolemite")); // ["Hello", "my", "name", "is", "Dolemite"]

// alternative regex "/\W+/" \W = not [a-ZA-Z_]