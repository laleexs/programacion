<?php
require_once("Animal.php");

class Gato extends Animal{

    function __construct($nombre, $edad){
        parent::__construct($nombre,$edad);
        
    }

    Public function hacerSonido(){
        parent::hacerSonido();
        echo "Miau <br>";
        
    }
}