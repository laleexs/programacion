<?php
/*Ejercicio 6.- Crear una clase llamada 'Matrix' que contenga un constructor que inicialice un array bi-dimensional 
con el número de filas y el número de columnas pasados al constructor. La clase Matrix tiene la siguiente información:

    número de filas de la matriz
    número de columnas de la matriz
    elementos de la matriz en forma de matriz 2D

La clase Matrix tiene métodos para cada uno de los siguientes:

    obtener el número de filas
    obtener el número de columnas
    establecer los elementos de la matriz en la posición dada (i,j)
    llenar todos los elementos de la matriz con valores aleatorios
    mostrar la matrix en un formato tabla HTML

Genera dos instancias de Matrix con valores aleatorios e imprime la matriz.
*/

class Matrix{
    private $filas;
    private $columnas;
    private $matriz = array();

    //constructor

    function __construct($filas, $columnas, $matriz){
        $this->filas = $filas;
        $this->columnas = $columnas;
        $this->$matriz = [$this->filas][$this->columnas];

    }

    function getFilas() {
        $this->filas;
    }
}