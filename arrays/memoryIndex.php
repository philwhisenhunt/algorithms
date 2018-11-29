<?php

class Task 
{
    public $description;

    public $completed;

    public function __construct($description, $completed)
    {
    $this->description = $description;
    $this->$completed = $completed;

    }

}

$tasks = [
    new Task('Get up early', true)
];

var_dump($tasks);