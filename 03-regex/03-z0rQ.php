<?php

require __DIR__ . "/vendor/autoload.php";

function zOrQ($string){
    return preg_match("/[qz]/i",$string) === 1;
};

dump(zOrQ("blah")); // false
dump(zOrQ("blqh")); // true
dump(zOrQ("bZ3h5")); // true
dump(zOrQ("bz3h5")); // true