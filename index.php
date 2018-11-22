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

}
$task = new Task();



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