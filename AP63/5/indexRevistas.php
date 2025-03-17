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
        <?php endif; // finaliza el if mezclando html i php ?>
        

</body>
</html>