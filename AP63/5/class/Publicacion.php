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

        public function setAuthor($author){
            $this->author = $author;
        }

        public function setYear($year){
            $this->year = $year;
        }

        //getters
        public function getTitle(){
            return $this->title;
        }

        public function getAuthor(){
            return $this->author;
        }

        public function getYear(){
            return $this->year;
        }

    }