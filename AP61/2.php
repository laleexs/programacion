<?php
/*
Ejercicio 2.- Imprimir el promedio de tres números mediante la creación de una clase llamada 'Average' con un método para calcular e imprimir el promedio.
La clase tendrá 3 parámetros (los 3 números) y 1 método para calcular el promedio. No hagas un constructor y declara las propiedades como privadas 
(deberás de acceder a ellas mediante los getters).
*/ 

class Average{
    private $number1;
    private $number2;
    private $number3;
    
    public  function setNumber1($number1){
        $this->number1 = $number1;
    }
    
    public  function setNumber2($number2){
        $this->number2 = $number2;
    }
    public  function setNumber3($number3){
        $this->number3 = $number3;
    }

    public function media(){
        return ($this->number1 + $this->number2 + $this->number3)/3;
        
    }
}
$obj = new Average(); // me da error porque le faltan 3 parametos de entrada
$obj->setNumber1(10);
$obj->setNumber2(15);
$obj->setNumber3(20);
echo $obj->media();