<!DOCTYPE html>
<html>
<head>
        <title>AP32</title>
</head>

<body>
    <h1>Ejercio 8</h1>
    <?php
    /*Ejercicio 8.- Realiza un algoritmo para generar e imprimir los números pares
     que se encuentran entre 0 y 100. */
     
   
     
     $contador = 1;
    

    while( $contador <=100){
        if ($contador % 2 == 0){ // si el resto es 0 entonces...
           echo $contador . "<br>";
           
        }
    $contador ++ ; 
    }
     

    ?>
</body>

</html>