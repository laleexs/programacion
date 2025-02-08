<?php
require_once("Factura.php");

class FacturaElectronica extends Factura{
    protected $emailCliente;

    //constructor
    public function __construct($cliente,$monto,$numeroFactura,$email){
        parent::__construct($cliente,$monto,$numeroFactura);
        $this->emailCliente = $email;
    }

    //setter
    public function setEmail($email){
        $this->emailCliente = $email;
    }

    //getter
    public function getEmail(){
        return $this->emailCliente;
    }

    //metodos
    public function enviarEmail(){
        echo "<br>La factura ". $this->numeroFactura . ", ha sido enviada. ";
    }

}