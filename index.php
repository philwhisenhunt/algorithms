<?php


require 'functions.php';


//Todo Application
//Todo, Comment, User
class Task {

    protected $description;
 
    public function __construct($description)
    {
        

        //Automatically triggered on instantiation
        $this-> description = $description;
    }

    public function  isComplete()
    {
        
    }

}
$task = new Task('Go to the store');



var_dump($task->isComplete());



$codewordlist = [
'spoof', 'leaf', 'town'
];



if(ageCheck(19)){
    echo "Go on in";
}
else {
    echo "Not allowed";
}


dd(ageCheck(15));

require 'index.view.php';