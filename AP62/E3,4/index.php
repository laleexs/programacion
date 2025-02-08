<?php
// Cargar automáticamente todas las clases en la carpeta 'class'
spl_autoload_register(function ($class_name) {
    require_once "class/$class_name.php";
});


$vehiculo1 = new Extravehiculo("Toyota","Prius","blanco","electrico");
$vehiculo1->mostrar();

$bicicleta1 = new Bici("Pinarello","Aero","Azul",True);
$bicicleta1->describir();
$bicicleta1->hacerKm(100);
$bicicleta1->hacerKm(50);
echo "<br>". $bicicleta1->getElectrica();