<!DOCTYPE html>
<html>
    <head>
        <tittle>AP42 </tittle>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
   
        <?php
        /* Ejercicio 3.- Escribe un script separar los valores de un array en dos arrays: los pares en uno y en el otro los impares.
        */

        //inicializando arrays
        $array= [1,2,3,4,5,6,7,8,9,10];
        $pares = [];
        $impares = [];

        //recorremos el array
        for($i = 0; $i < count($array); $i++){
            // si el resto de la división es 0 el numero es par
            if($array[$i]%2==0){
                $pares[] = $array[$i];
            //en caso contrario el numero es impar
            }else{
                $impares[] = $array[$i];
            }

        }

        //muestro los arrays
        var_dump($pares);
        var_dump($impares);
        ?>
    </body>
</html>