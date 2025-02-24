<?php
require_once("Publicacion.php");
class Libro extends Publicacion{
    protected $paginas;

    function __construct($author, $title, $year, $paginas){
        parent::__construct($author, $title, $year);
        $this->paginas =  $paginas;
    }

    public function setPaginas($paginas){
        $this->paginas = $paginas;
    }

    public function getPaginas(){
        return $this->paginas;
    }

    public function toArray(): array {
        return [
            'author' => $this->author,
            'title' => $this->title,
            'year' => $this ->year,
            'paginas' => $this->paginas
        ];
    }

    public static function fromArray(array $data): Libro {
        return new Libro($data['author'], $data['title'], $data['year'], $data['paginas']);
    }
}