<?php

$animals = [

'badger',
'tiger',
'bear',
'aardvark',
'lion'

];

$person = [

    'hair' => 'brown',
    'age' => 90,
    'alive' => true
];

$person['golfer'] = true;

$fruits = ['apple', 'banana'];
$fruits[] = 'kiwi';

echo '<pre>';
var_dump($fruits);

echo '</pre>';

unset($person['age']);

$tasks = [
    'chore' => 'dust',
    'completed' => true
];

echo '<pre>';
var_dump($tasks);
echo '</pre>';




require 'index.view.php';