<?php
session_start();
?>
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
    $manager = new LibroManager();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if(isset($_POST['action'])) {
                switch ($_POST['action']){  
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
                        $manager->printPublications();
                        break;
                }
            }
        }
        
    ?>
    <h1>Gestor de Biblioteca </h1>
    <form method="POST" action="" class ="mt-01">
        <h2>Añadir Publicación (Libro o Revista)</h2>
        <input type="hidden" name="action" value="add">
        <div class= "mb-1">
            <label for="title">Titulo: </label>
            <input type = "text" id="title" name= "title" required><br><br>
        </div>

        <div class= "mb-2">
            <label for="author">Autor:</label>
            <input type = "text"  id="author" name= "author" required><br><br>
        </div>

        <div class= "mb-3">
            <label for="year">Año:</label>
            <input type = "number" id ="year" name= "year" required><br><br>
        </div>

        <div class= "mb-4">
            <label for="var">Páginas de libro o Tipo de revista</label>
            <input type="text" name= "var" id="var" required><br><br>
        </div>

        <div class="mb-5">
            <button type="submit" name="add" value = "register">Añadir Publicación</button>
        </div>
    </form>

</body>
</html>