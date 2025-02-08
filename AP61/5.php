<?php
/*
Ejercicio 5.- Escribe un programa creando una clase 'Empleado' (propiedades: nombre, salario, horasDia), que tenga los siguientes métodos:

getInfo() que devuelve todas las propiedades del Empleado.
AddSal() que añade 10€ al salario del empleado si es inferior a 500€.
AddWork() que añade 5€ al salario del empleado si el número de horas de trabajo por día es superior a 6 horas.

Realiza un constructor.

Haz varias pruebas creando varios empleados.
*/

class Empleado{
    public $nombre;
    public $salario;
    public $horasDia;

    //constructor

    function __construct($nombre, $salario, $horasDia){
        $this->nombre = $nombre;
        $this->salario = $salario;
        $this->horasDia = $horasDia;
    }

    function getInfo() {
        echo "Nombre del trabajador: " . $this->nombre . "</br>";
        echo "Salario " . $this->salario . " Euros </br>";
        echo $this->horasDia ." Horas trabajadas al dia</br>";
    }

    function AddSal(){
        if($this->salario < 500){
            $this->salario += 10 ;
        }
    }

    function AddWork(){
        if($this->horasDia > 6){
            $this->salario += 5;
        }
    }

}

$trabajador1 = new Empleado("Vicente",400, 8);
$trabajador1->AddSal();
$trabajador1->AddWork();
$trabajador1->getInfo();


