<?php
function dd($data){
    echo '<pre>';
        die(var_dump($data));
    echo '</pre>';
}

function ageCheck($age){
    if($age >= 18 ){
        return true;
    }
    else {
        return false;
    }
}