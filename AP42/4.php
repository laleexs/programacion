<!DOCTYPE html>
<html>
    <head>
        <tittle>AP42 </tittle>
    </head>
    <body>
        <h1>Ejercicio 4</h1>

        <?php
        /* Ejercicio 4.- Modifica el script anterior, de forma que, en vez de crear dos arrays, 
        los números pares se almacenen en la fila 0 de un array bi-dimensional, y los impares en la fila 1 del mismo array.
        Almacena inicialmente los números en un array uni-dimensional y haz la separación a posteriori.
        */

        //inicializando arrays
        $array= [1,2,3,4,5,6,7,8,9,10];
        $newArray = [];

        //recorremos el array
        for($i = 0; $i < count($array); $i++){
            // si el resto de la división es 0 el numero es par
            if($array[$i]%2==0){
                //metemos los datos en el array bidimensional
                $newArray[0][] = $array[$i];
            //en caso contrario el numero es impar
            }else{
                $newArray[1][] = $array[$i];
            }

        }

        //muestro los arrays
        var_dump($newArray);
        
        ?>
    </body>
</html>