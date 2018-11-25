<?php


require 'functions.php';


//Todo Application
//Todo, Comment, User
class Task {

    protected $description;
    protected $completed = false;
    
 
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

// dd($tasks);





// $task = new Task('Go to the store');

// $task->complete();

// var_dump($task->isComplete());



$codewordlist = [
'spoof', 'leaf', 'town'
];



if(ageCheck(19)){
    echo "Go on in";
}
else {
    echo "Not allowed";
}




require 'index.view.php';