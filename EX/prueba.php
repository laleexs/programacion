<?php
$numbers = array();
for ($i = 0; $i < 36; $i++) { 
    $numbers[] = $i;
}
foreach ($numbers as $value){
    echo $value . " - " ;
}
// shuffle($numbers);
var_dump($numbers);
foreach ($numbers as $value){
    echo $value . " - " ;
}

$newNumbers = array();
for($i = 0; count($numbers); $i++){
    $newNumbers[$i] = array_pop($numbers);
}
var_dump($newNumbers);


/*foreach ($newNumbers as $value){
    echo $value . " - " ;
}
    */
?>
