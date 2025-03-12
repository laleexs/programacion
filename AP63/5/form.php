
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
// Asegurar que $manager está definido
    global $manager;
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
            <h2>Listado de Revistas</h2>
            <?php if (count($manager->getMagazines()) == 0): ?>
                <p>No hay revistas registrados</p>
            <?else: ?>
                <ul>
                    <?php foreach ($manager->getMagazines() as $index => $magazine): // bucle del array de libros para mostrarlos como indice y libro?>
                        <li>
                        <?php echo "Título: " . $magazine->getTitle() .", Autor: " . $magazine->getAuthor() . ", Año: " . $magazine->getYear() . ", Tipo: " . $magazine->getType() ?>
                            <form method="POST" class= "delete-form">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="index" value= "<?php echo $index; ?>">
                                <input type="hidden" name="var" value="<?php echo $magazine->getType(); ?>">
                                <button type="submit">Eliminar</button>
                            </form>
                        </li>
                    <?php endforeach; // para finalizar el bucle mezclando html ?>
                </ul>
            <?php endif; // finaliza el if mezclando html i php ?>
    
</body>
</html>