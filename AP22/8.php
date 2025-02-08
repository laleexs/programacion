<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO 8</title>
</head>
<body>
    <h1>Sueldo semanal </h1>

    <?php

    /* Ejercicio 8.- Se requiere determinar el sueldo semanal de 
    un trabajador con base en las horas que trabaja y el pago por
     hora que recibe.*/

    $horas = 10;
    $dinero = 5;

    $sueldo = $horas * $dinero;
        
        echo "El sueldo es : " . number_format($sueldo,2);
        /*El primer argumento es el número que deseas formatear.
        El segundo argumento es la cantidad de decimales que quieres
        mostrar. En este caso, 2*/


?>


    
</body>
</html>
