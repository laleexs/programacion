<?php
    class Publicacion{
        protected string $title;
        protected string $author;
        protected int $year;

        public function __construct($author, $title, $year){
            $this->title = $title;
            $this->author = $author;
            $this->year = $year;
        }

        //setters
        public function setTitulo($title){
            $this->title = $title;
        }

        public function setAutor($author){
            $this->author = $author;
        }

        public function setAnyo($year){
            $this->year = $year;
        }

        //getters
        public function getTitulo(){
            return $this->title;
        }

        public function getAutor(){
            return $this->author;
        }

        public function getAnyo(){
            return $this->year;
        }

        public function print(){
            echo "Título: $this->title; Autor: $this->author; Año: $this->year;<br> ";
        }
    }