<?php
require_once("Libro.php");

class Revista extends Publicacion {
    protected $type;

    public function __construct($author, $title, $year, string $type) {
        parent::__construct($author, $title, $year);
        $this->type = $type;
    }

    public function setTematica($type){
        $this->type = $type;
    }

    public function getTematica(){
        return $this->tematica;
    }

    public static function fromArray(array $data): Revista {
        return new Revista($data['title'], $data['author'], $data['year'], $data['type']);
    }

    public function toArray(): array {
        return [
            'title' => $this->title,
            'author' => $this->author,
            'year' => $this->year, 
            'type' => $this->type
        ];
    }

    public function print(){
        parent::print();
        echo "Tipo: $this->type<br>";
    }

}