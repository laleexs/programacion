<?php
class Factura{
    protected $cliente;
    protected $monto;
    protected $numeroFactura;

    //constructor
    public function __construct($cliente, $monto , $numeroFactura){
        $this->cliente = $cliente;
        $this->monto = $monto;
        $this->numeroFactura = $numeroFactura;
    }

    //setters
    public function setCliente($cliente){
        $this->cliente = $cliente;
    } 

    public function setMonto($monto){
        $this->monto = $monto;
    }

    public function setNumeroFactura($numeroFactura){
        $this->numeroFactura = $numeroFactura;
    }

    //getters
    public function getCliente(){
        return $this->cliente;
    }

    public function getMonto(){
        return $this->monto;
    }

    public function getNumeroFactura(){
        return $this->numeroFactura;
    }

    //metodos
    public function mostrarDetalle(){
        echo "<br>El cliente: ". $this->cliente .".<br> Tiene un monto de: ".$this->monto 
        ."e.<br> En el numero de factura: ". $this->numeroFactura;
    }
}