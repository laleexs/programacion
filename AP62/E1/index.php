<?php
// Cargar automáticamente todas las clases en la carpeta 'class'
spl_autoload_register(function ($class_name) {
    require_once "class/$class_name.php";
});

$gato1 = new Gato("Suri", 1);
$perro1 = new Perro("Thor", 12);
$pajaro1 = new Pajaro("Iago", 3);

echo "<br>El nombre del Gato es " . $gato1->getNombre();
echo "<br>La edad del Gato es " . $gato1->getEdad(). (($gato1->getEdad() == 1) ? " año" : " años");
$gato1->hacerSonido();

echo "<br>El nombre del Perro es " . $perro1->getNombre();
echo "<br>La edad del Perro es " . $perro1->getEdad(). (($perro1->getEdad() == 1) ? " año" : " años");
$perro1->hacerSonido();

echo "<br>El nombre del Pajaro es " . $pajaro1->getNombre();
echo "<br>La edad del Pajaro es " . $pajaro1->getEdad(). (($pajaro1->getEdad() == 1) ? " año" : " años");
$pajaro1->hacerSonido();