<?php
    class Publicacion{
        protected $titulo;
        protected $autor;
        protected $anyo;

        public function __construct($autor, $titulo, $anyo){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->anyo = $anyo;
        }

        //setters
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function setAutor($autor){
            $this->autor = $autor;
        }

        public function setAnyo($anyo){
            $this->anyo = $anyo;
        }

        //getters
        public function getTitulo(){
            return $this->titulo;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function getAnyo(){
            return $this->anyo;
        }
    }