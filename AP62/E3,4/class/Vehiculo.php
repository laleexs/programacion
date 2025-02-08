<?php
class Vehiculo{
    protected $marca;
    protected $modelo;
    protected $color;

    //constructor
    public function __construct($marca, $modelo, $color){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    //metodos
    public function describir(){
        echo "<br>El vehiculo es de la marca: ". $this->marca .
            "<br>El modelo es: " . $this->modelo . 
            "<br>El color es: " . $this->color;
    }
}