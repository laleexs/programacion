<!DOCTYPE html>
<html>
<head>
    <title>PRODUCCION LECHE</title>
</head>
<body>
    <h1>Productor de leche </h1>

    <?php

    /* Ejercicio 6: Un productor de leche lleva el registro de lo
     que produce en litros, pero cuando entrega le pagan en galones.
      Ayuda al productor a saber cuánto recibirá por la entrega de 
      su producción de un día. Se proporciona los litros por día
       del productor y se determinará cuánto le pagará por ellos a 
       razón de 2€ el galón. NOTA: 1 galón =3,785 litros.*/


      $litros = 15;
      define("GALON", 3.785);
      define("PRECIOGALON", 2);

      $conversionLitrosGalon = $litros / GALON;
      $dineroRecibido = $conversionLitrosGalon * PRECIOGALON;
        
        echo "El dinero que recibira el productor despues de convertir los litros a galones es: " . number_format($dineroRecibido, 2);
      /*El primer argumento es el número que deseas formatear.
        El segundo argumento es la cantidad de decimales que quieres
        mostrar. En este caso, 2*/


?>


    
</body>
</html>
