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
    
    $biblioteca = new LibroManager();

    var_dump($biblioteca);


    //hacemos varios libros 
    $biblioteca->addBook("Stephen king","IT",1986 , 1502);
    $biblioteca->addBook("Stephen king","La larga marcha",1979 , 353);
    
    var_dump($biblioteca);

    //ELIMINAR
    echo "Eliminamos por indice";
    $biblioteca->deleteBook(1);

    var_dump($biblioteca);



    /*
    --------CREACION DE LIBROS SOLO CON LAS CLASES ----------------------------------------------
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

    -------------------------------GESTOR DE LIBROS SIN JSON-----------------------------------PUEDE QUE NO FUNCIONE DESPUES DE MODIFICAR ALGO DE ESPAÑOL AL INGLES POR EJEMPLO DE TITULO A TITLE---------------
    echo "--- Sistema de gestión de Libros ---<br><br>";
    $manager = new LibroManager();

    $manager->crearLibro("Stephen king","IT",1986 , 1502);
    $manager->crearLibro("Enrique Coperías ","Muy interesante", 1981, 200, "Ciencias");
    $manager->crearLibro("Stephen king","La larga marcha",1979 , 353);
    $manager->listarLibros();
    $manager->listarRevistas();
    $manager->updateLibro(1,"Stephen king","IT extended edition",1990 , 1700);
    $manager->listarLibros();
    $manager->borrarLibro(2);
    $manager->listarLibros();
    $manager->borrarRevista(1);
    $manager->listarRevistas();
    */

    ?>
</body>
</html>