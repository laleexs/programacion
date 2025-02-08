<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO 10</title>
</head>
<body>
    <h1>la distribuidora de agua  </h1>

    <?php

    /* Ejercicio 10.- La distribuidora de agua potable requiere 
    determinar el pago que debe realizar una persona por el total
     de metros cúbicos que consume de agua al llenar un depósito.
*/

    $alto = 10;
    $largo = 20;
    $ancho = 5;


    $metrosCubicos = $alto * $largo * $ancho;
        
        echo "Metros cubicos : " . number_format($metrosCubicos,2);
        /*El primer argumento es el número que deseas formatear.
        El segundo argumento es la cantidad de decimales que quieres
        mostrar. En este caso, 2*/


?>


    
</body>
</html>
