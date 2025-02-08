<!DOCTYPE html>
<html>
<head>
        <title>AP32</title>
</head>

<body>
    <h1>Ejercio 7</h1>
    <?php
    /*Ejercicio 7.- Se requiere un algoritmo para determinar, de N cantidades,
     cuántas son menores o iguales a cero y cuántas mayores a cero. */
     
   
     $cantidad = $_GET["cantidad"];
     $contador = 1;
     $menor = 0;
     $mayor = 0;

     while ($contador <= $cantidad){
        $random = rand(-50, 50);
        if ($random <= 0){
            $menor ++;
            echo $random . " , "; // muestra el numero random y los separa con una ,
        }else{
            $mayor ++;
            echo $random . " , ";
        }
     $contador++;
    }
    

    echo "<br>De la cantidad de $cantidad numeros, $menor son menores o iguales a 0 y $mayor son mayores a 0.";
    ?>
</body>

</html>