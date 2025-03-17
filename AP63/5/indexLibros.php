<?php

require_once("class/libroManager.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href="form.php"><button>Volver a formulario</button></a>
    <title>AP63</title>
</head>
<body>
<?php
$manager = new LibroManager();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if($_POST['action']=='delete'){
        $index = (int)($_POST['index'] ?? -1);
        $manager->deleteBook($index);
        echo "<p>Libro eliminado correctamente.</p>";
    }
}
    ?>
    <h2>Listado de Libros</h2>
            <?php if (count($manager->getBooks()) == 0): ?>
                <p>No hay libros registrados</p>
            <?else: ?>
                <ul>
                    <?php foreach ($manager->getBooks() as $index => $book): // bucle del array de libros para mostrarlos como indice y libro?>
                        <li>
                            <?php echo "Título: " . $book->getTitle() .", Autor: " . $book->getAuthor() . ", Año: " . $book->getYear() . ", Páginas: " . $book->getPages() ?>
                            <form method="POST" class= "delete-form">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="index" value= "<?php echo $index; ?>">
                                <input type="hidden" name="var" value="<?php echo $book->getPages(); ?>">
                                <button type="submit">Eliminar</button>
                            </form>
                        </li>
                    <?php endforeach; // para finalizar el bucle mezclando html ?>
                </ul>
            <? endif; // finaliza el if mezclando html i php ?>
        
</body>
</html>