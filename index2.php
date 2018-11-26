<?php


require 'functions.php';


//Todo Application
//Todo, Comment, User
class Task {

    public $description;
    public $completed = false;
    
 
    public function __construct($description)
    {
        

        //Automatically triggered on instantiation
        $this-> description = $description;
    }

    public function Complete()
    {
        $this->completed = true;
    }
    

    public function  isComplete()
    {
        return $this->completed;
    }

}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')
];

$tasks[0]->Complete();
$tasks[1]->Complete();


require 'index.view.php';