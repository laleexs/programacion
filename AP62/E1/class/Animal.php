<?php
class Animal{
    protected $nombre;
    protected $edad;

    //construtor
    function __construct($nombre, $edad = "Edad desconocida"){
        $this->nombre = $nombre;
        $this->edad = $edad;

    }

    //setters
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    //getters
    public function getNombre(){
        return $this->nombre; 
    }

    public function getEdad(){
        return $this->edad;
    }


    //metodos
    public function hacerSonido(){
        echo "<br>El animal suena así: ";
    }
}