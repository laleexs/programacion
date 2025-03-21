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

$totalBooks=count($manager->getMagazines());
    $booksPerPage = 3; 
    $totalPages = ceil(count($manager->getMagazines()) / $booksPerPage); // ceil, es una función matemática que redondea un número decimal hacia arriba al entero más cercano

    //obtener el numero de página actual
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // (int) Convierte el valor de page en un número entero para evitar posibles problemas

    //calcular el índice inicial y pfinal para la paginación
    $startIndex = ($page - 1) * $booksPerPage;
    $booksToShow = array_slice($manager->getBooks(), $startIndex, $booksPerPage);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if($_POST['action']=='delete1'){
        $index = ($_POST['index'] ?? -1);
        $manager->deleteMagazine($index);
        echo "<p>Revista eliminada correctamente.</p>";
    }
}
?>
        <h2>Listado de Revistas</h2>
        <?php if (count($manager->getMagazines()) == 0): ?>
            <p>No hay revistas registrados</p>
        <?else: ?>
            <ul>
                <?php foreach ($manager->getMagazines() as $index => $magazine): // bucle del array de libros para mostrarlos como indice y libro?>
                    <li>
                    <?php echo "Título: " . $magazine->getTitle() .", Autor: " . $magazine->getAuthor() . ", Año: " . $magazine->getYear() . ", Tipo: " . $magazine->getType() ?>
                        <form method="POST" class= "delete-form">
                            <input type="hidden" name="action" value="delete1">
                            <input type="hidden" name="index" value= "<?php echo $index; ?>">
                            <input type="hidden" name="var" value="<?php echo $magazine->getType(); ?>">
                            <button type="submit">Eliminar</button>
                        </form>
                    </li>
                <?php endforeach; // para finalizar el bucle mezclando html ?>
            </ul>
            <!--Paginación-->  
            <div>
                        <?php if ($page > 1): ?>
                            <a href="?page=1"> << </a>
                            <a href="?page=<?php echo $page -1; ?>"> < </a>
                            <?php endif; ?>
                            <span>Página <?php echo $page; ?> de <?php echo $totalPages; ?></span>
                            <?php if ($page < $totalPages): ?>
                                <a href="?page=<?php echo $page + 1; ?>"> > </a>
                                <a href="?page=<?php echo $totalPages; ?>"> >> </a>
                            <?php endif; ?>
                    </div>
                <? endif; // finaliza el if mezclando html i php ?>
            

</body>
</html>