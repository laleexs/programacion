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


    ?>
</body>
</html>