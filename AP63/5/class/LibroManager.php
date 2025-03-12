<?php
require_once("Libro.php");
require_once("Revista.php");

//Clase que administra el CRUD de Libros
        class LibroManager {
            private array $books = [];
            private array $magazines = [];
            private string $filePathBooks = 'data/datosBooks.json';
            private string $filePathMagazines = 'data/datosMagazines.json';
            
            //CONSTRUCTOR
            public function __construct(){
                $this->loadPublications();
            }

            //Métodos para manejar publicaciones (libros y revistas)
            private function loadPublications(): void {
                if (file_exists($this->filePathBooks)) {
                    $dataBook = json_decode(file_get_contents($this->filePathBooks), true);
                }
                if ($dataBook != null && is_array($dataBook)){
                    foreach ($dataBook as $array){
                        //libro 
                        if (array_key_exists('pages', $array)){ // si existe la llave pages crea un libro 
                            $this->books [] = Libro::fromArray($array);
                        }
                    }
                }
                //cargar revistas
                if (file_exists($this->filePathMagazines)) {
                    $dataMagazine = json_decode(file_get_contents($this->filePathMagazines), true);
                }
                if ($dataMagazine != null && is_array($dataMagazine)){
                    foreach ($dataMagazine as $array){
                        //revista
                        if (array_key_exists('type', $array)){ // si existe la llave type crea una revista
                            $this->magazines [] = Revista::fromArray($array);
                        }
                        
                    }
                }
            }

            public function addPublication(string $title, string $author, int $year, $var): void {
                if (is_numeric($var)){
                    $book = new Libro($title, $author, $year, $var);
                    $this->books[] = $book;
                    $this->saveBooks();
                } else {
                    $magazine = new Revista($title, $author, $year, $var);
                    $this->magazines[] = $magazine;
                    $this->saveMagazines();
                }
                
            }
            
            //Métodos para manejar libros
            public function readBooks(): array {
                return $this->books;
            }

            public function deleteBook(int $index): void {
                if (isset($this->books[$index])) {
                    unset($this->books[$index]);
                    $this->books = array_values($this->books);
                    $this->saveBooks();
                }
            }

            private function saveBooks(): void {
                $jsonBiblio = [];
                foreach ($this->books as $object){
                    $arrayBook = $object->toArray();
                    $jsonBiblio[] = $arrayBook;
                }
                $jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);
                file_put_contents($this->filePathBooks, $jsonBiblio);
            }

            public function readMagazines(): array {
                return $this->magazines;
            }

            public function deleteMagazine(int $index): void {
                if (isset($this->magazines[$index])) {
                    unset($this->magazines[$index]);
                    $this->magazines = array_values($this->magazines);
                    $this->saveMagazines();
                }
            }

            

            private function saveMagazines(): void {
                $jsonBiblio = [];
                foreach ($this->magazines as $object){
                    $arrayMagazine = $object->toArray();
                    $jsonBiblio[] = $arrayMagazine;
                }
                $jsonBiblio = json_encode($jsonBiblio, JSON_PRETTY_PRINT);
                file_put_contents($this->filePathMagazines, $jsonBiblio);
            }

            public function getBooks(): array
            {
                return $this->books;
            }
            
            public function getMagazines(): array
            {
                return $this->magazines;
            }
        }
//  }
//}