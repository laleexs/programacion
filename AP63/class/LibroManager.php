<?php
require_once("Libro.php");
require_once("Publicacion.php");

//Clase que administra el CRUD de Libros

class LibroManager {
    private array $libros = [];
    private array $publicaciones = [];
    
    //CREATE: agregar un Libro o revista
    public function crearLibro($autor, $titulo, $anyo , $paginas, $tematica = NULL){
        if ($tematica == NULL){
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
            echo($index +1) ."Título: ". $libro->getTitulo() .
                            ", Autor: " . $libro->getAutor() .
                            ", Año: " . $libro->getAnyo() .
                            ", Paginas: " . $libro->getPaginas();
        }    
    }

    // UPDATE: Modificar un libro o revista por índice
    public function updateLibro($index, $newAutor, $newTitulo, $newAnyo , $newPaginas, $newTematica =NUll){
        if (!isset($this->libros[$index])){
            echo "Libro no encontrado. <br>";
            return;
        }
        if($newTematica = NULL){
            $libro =$this->libros[$index];
            $libro->setAutor($newAutor);
            $libro->setTitulo($newTitulo);
            $libro->setAnyo($newAnyo);
            $libro->setPaginas($newPaginas);
            echo "Libro Actualizado correctamente.<br>";
        }else{
            $revista =$this->publicaciones[$index];
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
        if  (!isset($this->libros[$index])){
            echo "Libro no encontrado.<br>";
            return;
        }

        $libroBorrado = $this->libros[$index]->getTitulo();
        unset($this->libros[$index]);
        $this->libros = array_values($this->libros);
        echo "Libro " . $libroBorrado ." eliminado correctamente.<br>";

    }

    public function borrarRevista($index){
        if  (!isset($this->publicaciones[$index])){
            echo "Revista no encontrado.<br>";
            return;
        }

        $revistaBorrada = $this->publicaciones[$index]->getTitulo();
        unset($this->publicaciones[$index]);
        $this->publicaciones = array_values($this->publicaciones);
        echo "Revista " . $revistaBorrada ." eliminada correctamente.<br>";

    }


}