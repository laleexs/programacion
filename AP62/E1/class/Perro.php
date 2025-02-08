<?php
require_once("Animal.php"); // se conecta al otro archivo

class Perro extends Animal{
    private $sonido;

    function __construct($nombre, $edad){
        parent::__construct($nombre,$edad);
        
    }

    function hacerSonido(){
        parent::hacerSonido();
        echo "Guau Guau <br>";
    }
}