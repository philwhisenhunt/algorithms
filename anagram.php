<?php
function anagramer ($first, $second){
//take in both inputs
//switch to lowercase

$first = strtolower($first);
$second = strtolower($second);


//turn into array
$first = str_split($first);
$second = str_split($second);
print_r($second);

//sort the array
sort($first);
sort($second);



//compare to each other 
  if ($first == $second){

    ?>
    <h1>
    This is a anagram
    </h1>
    <?php
  }
  else {
     
    echo "This is not an anagram";
 
  }
}




$first = "harried";
$second = "deiarrh";
anagramer($first, $second);
?>