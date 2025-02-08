<?php
/* Ejercicio 4.- Imprimir el promedio de tres números mediante la creación de una clase llamada 'Average'
con un método para calcular e imprimir el promedio. La clase tendrá 3 parámetros (los 3 números) y 1 método 
para calcular el promedio.
Realiza un constructor para poder inicializar los objetos creados.
*/

class Average{
    public $number1;
    public $number2;
    public $number3;
    
    //constructor
    function __construct($number1, $number2, $number3){
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->number3 = $number3;
    }
    public function media(){
        echo round((($this->number1 + $this->number2 + $this->number3)/3),2);// redondeamos a dos decimales
    }
}

$operacion = new Average(3,5,6);
$operacion->media();
