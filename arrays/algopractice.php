<?php

function flip($original)
{
$flipped = strrev($original);
echo "\n ". $flipped ."\n ";

$nowArray = str_split($flipped);
print_r($nowArray);

sort($nowArray);
print_r($nowArray);

}

flip('hello');