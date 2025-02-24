<?php
require_once("Libro.php");
require_once("Publicacion.php");

//Clase que administra el CRUD de Libros

class LibroManager {
    private array $books = [];
    private array $publicaciones = [];
    private string $filePath = 'datos.json';
    
    //CONSTRUCTOR
    public function __construct(){
        $this->loadBooks();
    }

    private function loadBooks(): void {
        if(file_exists($this->filePath)){
            $data = json_decode(file_get_contents($this->filePath), true);
        }

        if($data != null && is_array($data)){ // si $data no esta vacio y $data es un array
            foreach($data as $array){
                $this->books [] = Libro::fromArray($array);
            }
        }
    }

    public function addBook(string $author, string $title, int $year, int $paginas):void{
        $book = new Libro($author, $title, $year, $paginas);
        $this->books[] = $book;
        $this->saveBooks();
    }


    public function readBooks():array{
        return $this->books;
    }

    public function deleteBook(int $index):void {
        if (isset($this->books[$index])){
            unset($this->books[$index]);
            $this->books = array_values($this->books);
            $this->saveBooks();
        }
    }

    private function saveBooks():void {
        $jsonBiblio = [];
        foreach ($this->books as $object){
            $arrayBook = $object->toArray();
            $jsonBiblio = $arrayBook; 
        }
        $jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);
        file_put_contents($this->filePath, $jsonBiblio);
    }
    
}

    /*
    ---------------------SIN JSON ----------------------------------------------------------------------------
    //CREATE: agregar un Libro o revista
    public function crearLibro($autor, $titulo, $anyo , $paginas, $tematica = NULL){
        if ($tematica === NULL){
            $libro = new Libro($autor,$titulo,$anyo,$paginas);
            $this->libros[] = $libro;
            echo "Libro '$titulo' agregado correctamente.<br>";
        }else{
            $revista = new Revista($autor, $titulo, $anyo , $paginas, $tematica);
            $this->publicaciones[] = $revista;
            echo "Revista '$titulo' agregada correctamente.<br>";
        }
    }

    //READ: Listar todos los libros
    public function listarLibros(){
        if (empty($this->libros)){
            echo "No hay libros registrados.<br>";
        return;
        }
        echo "Lista de Libros:<br>";
        foreach($this->libros as $index => $libro){
            echo($index +1) ."- Título: ". $libro->getTitulo() .
                            ", Autor: " . $libro->getAutor() .
                            ", Año: " . $libro->getAnyo() .
                            ", Paginas: " . $libro->getPaginas().".<br>";
        }    

    }
    public function listarRevistas(){
        if (empty($this->publicaciones)){
            echo "No hay revistas registradas.<br>";
        return;
        }
        echo "Lista de Revistas:<br>";
        foreach($this->publicaciones as $index => $revista){
            echo($index +1) ."- Título: ". $revista->getTitulo() .
                            ", Autor: " . $revista->getAutor() .
                            ", Año: " . $revista->getAnyo() .
                            ", Paginas: " . $revista->getPaginas().
                            ", Tematica: ". $revista->getTematica().".<br>";
        }    
        
    }

    // UPDATE: Modificar un libro o revista por índice
    public function updateLibro($index, $newAutor, $newTitulo, $newAnyo , $newPaginas, $newTematica =NUll){
        if (!isset($this->libros[$index])){
            echo "Libro no encontrado. <br>";
            return;
        }
        if($newTematica === NULL){
            $libro =$this->libros[$index-1];
            $libro->setAutor($newAutor);
            $libro->setTitulo($newTitulo);
            $libro->setAnyo($newAnyo);
            $libro->setPaginas($newPaginas);
            echo "Libro Actualizado correctamente.<br>";
            
        }else{
            $revista =$this->publicaciones[$index-1];
            $revista->setAutor($newAutor);
            $revista->setTitulo($newTitulo);
            $revista->setAnyo($newAnyo);
            $revista->setPaginas($newPaginas);
            $revista->setTematica($newTematica);
            echo "Revista Actualizado correctamente.<br>";
        }
    }

    //DELETE: Eliminar 
    public function borrarLibro($index){
        if  (!isset($this->libros[$index-1])){
            echo "Libro no encontrado.<br>";
            return;
        }

        $libroBorrado = $this->libros[$index-1]->getTitulo();
        unset($this->libros[$index-1]);
        $this->libros = array_values($this->libros);
        echo "Libro " . $libroBorrado ." eliminado correctamente.<br>";

    }

    public function borrarRevista($index){
        if  (!isset($this->publicaciones[$index-1])){
            echo "Revista no encontrado.<br>";
            return;
        }

        $revistaBorrada = $this->publicaciones[$index-1]->getTitulo();
        unset($this->publicaciones[$index-1]);
        $this->publicaciones = array_values($this->publicaciones);
        echo "Revista " . $revistaBorrada ." eliminada correctamente.<br>";

    }
*/