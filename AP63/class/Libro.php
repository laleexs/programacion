<?php
require_once("Publicacion.php");
class Libro extends Publicacion{
    protected $paginas;

    function __construct($autor, $titulo, $anyo, $paginas){
        parent::__construct($autor, $titulo, $anyo);
        $this->paginas =  $paginas;
    }

    public function setPaginas($paginas){
        $this->paginas = $paginas;
    }

    public function getPaginas(){
        return $this->paginas;
    }
}