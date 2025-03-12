<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AP63</title>
</head>
<body>
<?php

// Cargar automáticamente todas las clases en la carpeta 'class'
    spl_autoload_register(function ($class_name) {
    require_once "class/$class_name.php";
    });
    $manager = new LibroManager();
    
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if(isset($_POST['action'])) {
                switch ($_POST['action']){  
                    // AÑADIR
                    case 'add':
                        $title =  $_POST['title'] ?? "";
                        $author =  $_POST['author'] ?? "";
                        $year =  $_POST['year'] ?? "";
                        $var = $_POST['var'];

                        if(!empty($title)&& !empty($author) && !empty($var)){
                            $manager->addPublication($title, $author, $year, $var);
                            
                            echo "<p>Publicación '$title' agregado correctamente.</p>";
                        }else{
                            echo "<p>Por favor, completa todos los campos correctamente</p>";
                        }
                        
                        break;
                    //ELIMINAR    
                    case 'delete':
                        $index = (int)($_POST['index'] ?? -1);
                        $var = $_POST['var'];
                        if ($index >=0) {
                            if(is_numeric($var)){// sirve para verificar si un valor es un número válido en PHP
                                $manager->deleteBook($index);
                                echo "<p>Libro eliminado correctamente.</p>";
                            }else{
                                $manager->deleteMagazine($index);
                                echo "<p>Revista eliminada correctamente.</p>";
                            }
                        }
                        break;
                }
            }
        }
    include "form.php";
 
    ?>
    

</body>
</html>