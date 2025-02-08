<?php
require_once("Animal.php");

class Pajaro extends Animal{

    function __construct($nombre, $edad){
        parent::__construct($nombre,$edad);
        
    }

    public function hacerSonido(){
        parent::hacerSonido();
        echo "Pío Pío <br>" ; 
    }
}