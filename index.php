<?php


require 'functions.php';



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