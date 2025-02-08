<!DOCTYPE html>
<html>
<head>
    <title>EJERCICIO 9</title>
</head>
<body>
    <h1>fábrica textil  </h1>

    <?php

    /* Ejercicio 9.- Una fábrica textil, para realizar sus prendas
     de vestir, encarga las telas al extranjero. Para cada pedido,
      tiene que proporcionar las medidas de la tela en pulgadas,
       pero generalmente las tiene en metros. Se requiere 
       determinar cuántas pulgadas se deben pedir en base a los
        metros que se requieren (1 pulgada = 0.0254 m).*/

    $metros = 10;
    $conversion = 1/0.0254;


    $pulgadas = $metros * $conversion;
        
        echo "Pulgadas a pedir : " . number_format($pulgadas,2);
        /*El primer argumento es el número que deseas formatear.
        El segundo argumento es la cantidad de decimales que quieres
        mostrar. En este caso, 2*/


?>


    
</body>
</html>
