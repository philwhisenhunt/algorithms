<?php

class Chore
{
    public $chore;
    public $completed;

    public function __construct($chore, $completed)
    {
        $this->$chore = $chore;
        $this->$completed = $completed;
    }

 
}

$chores = [
    new Chore('Clean the house', true),
    new Chore('Mow the lawn', true)
];

$chores = array_map(function ($chore) {
    return (array) $chore;
}, $chores);

var_dump($chores);
