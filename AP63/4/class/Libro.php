<?php
require_once("Publicacion.php");
class Libro extends Publicacion{
    private int $pages;

    function __construct($author, $title, $year,int  $pages){
        parent::__construct($author, $title, $year);
        $this->pages =  $pages;
    }

    public function setPages($pages){
        $this->pages = $pages;
    }

    public function getPages(): int{
        return $this->paginas;
    }

    public function toArray(): array {
        return [
            'author' => $this->author,
            'title' => $this->title,
            'year' => $this ->year,
            'pages' => $this->pages
        ];
    }

    public static function fromArray(array $data): Libro {
        return new Libro($data['author'], $data['title'], $data['year'], $data['pages']);
    }

    public function print(){
        parent::print();
        echo "Páginas: $this->pages<br>";
    }
}