<?php


require 'functions.php';


//Todo Application
//Todo, Comment, User
class Task {

    public function __construct()
    {
        //Automatically triggered on instantiation
    }
}



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