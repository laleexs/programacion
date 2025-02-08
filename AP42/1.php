<!DOCTYPE html>
<html>
    <head>
        <tittle>AP42 </tittle>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
   
        <?php
        /* Ejercicio 1.- Escribe un script para mostrar en orden inverso los valores de un array.
          Coloca estos valores previamente en un array.
        */
        //crear array
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        //mostrar en orden inverso
        
        $newArray = array_reverse($array); // invierte el orden de los elementos en un nuevo array
        

        var_dump($newArray); // visualizamos el nuevo array

        ?>
    </body>
</html>