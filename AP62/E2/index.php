<?php
// Cargar automáticamente todas las clases en la carpeta 'class'
spl_autoload_register(function ($class_name) {
    require_once "class/$class_name.php";
});

$cliente1 = new FacturaElectronica("Alex" ,100 ,1 ,"alex@gmail.com");
$cliente1->mostrarDetalle();
$cliente1->enviarEmail();