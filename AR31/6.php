<!DOCTYPE html>
<html>
    <head>
        <title>AR31</title>
    
    
    </head>
    <body>
        <h1>Ejercicio 6</h1>
 
        <?php

/* Ejercicio 6.- Una persona adquirió un producto para pagar en 20 meses. El primer mes pagó 10€, 
el segundo 20€, el tercero 40€ y así sucesivamente. Realiza un algoritmo para determinar cuánto 
debe pagar mensualmente y el total de lo que pagó después de los
 */
        $pago= 10;
        $i= 1;

        for($i = 1 ; $i <21; $i++) {
            echo"Lleva pagado en el mes nº $i, $pago euros<br>";
            $pago += $pago;
        
        }

        
        ?>
    </body>
</html>