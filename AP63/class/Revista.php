<?php
require_once("Libro.php");

class Revista extends Libro{
    protected $tematica;

    public function __construct($autor, $titulo, $anyo, $paginas, $tematica) {
        parent::__construct($autor, $titulo, $anyo, $paginas);
        $this->tematica = $tematica;
    }

    public function setTematica($tematica){
        $this->tematica = $tematica;
    }

    public function getTematica(){
        return $this->tematica;
    }
}