<?php
require_once("Vehiculo.php");

class Extravehiculo extends Vehiculo{
    private $tipoCombustible;

    //constructor
    public function __construct($marca,$modelo,$color,$tipoCombustible){
        parent::__construct($marca,$modelo,$color);
        $this->tipoCombustible = $tipoCombustible;
    }

    //setter
    public function setTipoCombustible($tipo){
        $this->tipoCombustible = $tipo;
    }

    //getter
    public function getTipoCombustible(){
        return $this->tipoCombustible;
    }

    //metodos
    public function mostrar(){
        parent::describir();
        echo "<br>El tipo de combustible es: ". $this->tipoCombustible;
    }
}