<?php
require_once("Vehiculo.php");

class Bici extends Vehiculo{
    private $electrica;
    private $km;

    //constructor
    public function __construct($marca,$modelo,$color,$electrica){
        parent::__construct($marca,$modelo,$color);
        $this->electrica = $electrica;
    }

    //set
    public function setElectrica($electrica){
        $this->electrica = $electrica;
    }

    //get
    public function getElectrica(){ // electrica True, no electrica False
        return (($this->electrica == True)? "La bici es electrica": "La bici NO es electrica");
    }

    //metodos 
    public function describir(){
        parent::describir();
        $this->getElectrica();
    }

    public function hacerKm($km){
        $this->km += $km;
        echo "<br>Km recorridos totales: ". $this->km;
    }
}
