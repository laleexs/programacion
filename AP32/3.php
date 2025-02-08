<!DOCTYPE html>
<html>
<head>
    <title>AP32</title>
</head>
<body>
    <h1>Ejercicio 3</h1>

    <?php
    /* Ejercicio 3.- El director de una escuela está organizando un viaje de
     estudios, y requiere determinar cuánto debe cobrar a cada alumno y
      cuánto debe pagar a la compañía de viajes por el servicio. La forma de
       cobrar es la siguiente:

        si son 100 alumnos o más, el coste por cada alumno es de 65.00€
        de 50 a 99 alumnos, el coste es de 70.00€
        de 30 a 49, de 95.00€
        si son menos de 30, el coste de la renta del autobús es de 4000.00€, 
            sin importar el número de alumnos.

    Realiza un algoritmo que permita determinar el pago a la compañía de 
    autobuses y lo que debe pagar cada alumno por el viaje.
     */

    $alumnos = $_GET["alumnos"];

        if ($alumnos >= 100){
            $precio = 65;
            $pago = $alumnos * $precio;
            echo "El precio final del autobus es de :" . $pago;
        }else if ($alumnos >= 50 && $alumnos <= 99){
            $precio = 70;
            $pago = $alumnos * $precio;
            echo "El precio final del autobus es de :" . $pago;
        }else if ($alumnos >= 30 && $alumnos <= 49){
            $precio = 95;
            $pago = $alumnos * $precio;
            echo "El precio final del autobus es de :" . $pago;
        }else{
            $preciofinal = 4000;
            echo "El precio final del autobus es de :" . $preciofinal;
        }

   
    ?>


    
</body>
</html>
