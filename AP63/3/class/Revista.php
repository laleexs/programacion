<?php
require_once("Libro.php");

class Revista extends Libro{
    protected $tematica;

    public function __construct($author, $titulo, $year, $paginas, $tematica) {
        parent::__construct($author, $titulo, $year, $paginas);
        $this->tematica = $tematica;
    }

    public function setTematica($tematica){
        $this->tematica = $tematica;
    }

    public function getTematica(){
        return $this->tematica;
    }
}