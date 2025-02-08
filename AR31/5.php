<!DOCTYPE html>
<html>
    <head>
        <title>AR31</title>
    </head>
    <body>
        <h1>Ejercicio 5</h1>
        <form method="POST">
            <label for="number">Numero de ventas: </label>
            <input name="number"><br><br>


            <input type="submit" value = "enviar"><br><br>
        </form>
        <?php

/*  Ejercicio 5.- Un empleado de la tienda “Spit-Spot” realiza N ventas durante el día, 
se requiere saber cuántas de ellas fueron mayores a 1000€, cuántas fueron mayores a 500€
 pero menores o iguales a 1000€, y cuántas fueron menores o iguales a 500€. Además, se
  requiere saber el monto de lo vendido en cada categoría y de forma global. Realiza un
   algoritmo que permita determinar lo anterior.

Se introducirá tan solo el número de ventas. Mediante números aleatorios se generará el 
importe de todas las ventas.
 */
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $numberSales = $_POST["number"];
            $minors500 = 0;
            $minors1000 = 0;
            $older1000 = 0; // mayores de 1000
            $amountMinors500 = 0;
            $amountMinors1000 = 0;
            $amountOlder1000 = 0;

            for($i=0; $i < $numberSales; $i++){
                echo $import = rand(1,2000). "<br>"; // he puesto el echo para comprobar visualmente
                if($import <= 500){
                    $minors500 ++;
                    $amountMinors500 += $import;
                }elseif($import >500 && $import <= 1000){
                    $minors1000 ++;
                    $amountMinors1000 += $import;
                }elseif($import > 1000){
                    $older1000 ++;
                    $amountOlder1000 += $import;
                }
            }
            echo "Numero de Ventas: $numberSales. <br>";
            echo "Menores o iguales a 500: $minors500<br>";
            echo "El monto de menores o iguales a 500: $amountMinors500<br>";
            echo "Menores o iguales a 1000: $minors1000<br>";
            echo "El monto de menores o iguales a 1000: $amountMinors1000<br>";
            echo "Mayores o iguales a 1000: $older1000<br>";
            echo "El monto de mayores o iguales a 1000: $amountOlder1000<br>";
        }
        ?>
    </body>
</html>