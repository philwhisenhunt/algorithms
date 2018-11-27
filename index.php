<?php


$query = require 'bootstrap.php';


require 'Task.php';





// $tasks = $query->selectAll('todos', 'Task');

$tasks = $database->selectAll('todos');

die(var_dump($tasks));

require 'index.view.php';