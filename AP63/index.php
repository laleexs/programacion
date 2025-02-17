<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP63</title>
</head>
<body>
    <?php
    // Cargar automáticamente todas las clases en la carpeta 'class'
    spl_autoload_register(function ($class_name) {
        require_once "class/$class_name.php";
    });
    
    echo "<br>Libro 1: ";
    $libro1 = new Libro("Stephen king","IT",1986 , 1502);
    echo "<br>". $libro1->getAutor();
    echo "<br>". $libro1->getTitulo();
    echo "<br>". $libro1->getAnyo();
    echo "<br>". $libro1->getPaginas();

    echo "<br>Revista 1: ";
    $revista1 = new Revista("Enrique Coperías ","Muy interesante", 1981, 200, "Ciencias");
    echo "<br>". $revista1->getAutor();
    echo "<br>". $revista1->getTitulo();
    echo "<br>". $revista1->getAnyo();
    echo "<br>". $revista1->getPaginas();
    echo "<br>". $revista1->getTematica();
    ?>
</body>
</html>