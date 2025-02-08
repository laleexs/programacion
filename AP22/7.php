<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO 7</title>
</head>
<body>
    <h1>Plano cartesiano </h1>

    <?php

    /* Ejercicio 7: Se requiere obtener la distancia entre dos
     puntos en el plano cartesiano:*/

    $x1 = 2;
    $x2 = 3; 
    $y1 = 6;
    $y2 = 8;

    $distancia = sqrt(pow($x2-$x1,2)+pow($y2-$y1,2));
        
        echo "la distancia es : " . number_format($distancia,2);
        /*El primer argumento es el número que deseas formatear.
        El segundo argumento es la cantidad de decimales que quieres
        mostrar. En este caso, 2*/


?>


    
</body>
</html>
