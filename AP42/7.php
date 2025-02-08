<!DOCTYPE html>
<html>
    <head>
        <tittle>AP42 </tittle>
    </head>
    <body>
        <h1>Ejercicio 7</h1>
        
        <?php
        /*Ejercicio 7.- Crea un script para desplazar los 0 al final del array, respetando el orden del resto de valores.
        Muestra el array. Puedes usar un array de prueba, por ejemplo: [2, 5, 7, 0, 4, 0, 7, -5, 8, 0].
        Puedes usar array_splice, array_push y implode si te son útiles.
        */

        //inicializando arrays
        $array = [2, 5, 7, 0, 4, 0, 7, -5, 8, 0];

        // Separar los valores distintos de 0 y los ceros
        $sinCeros = [];
        $ceros = [];
        
        // Recorrer el array y clasificar los valores
        foreach ($array as $value) {
            if ($value === 0) {
                // Agregar a los ceros
                $ceros[] = $value; 
            } else {
                // Agregar a los valores sin ceros
                $sinCeros[] = $value; 
            }
        }
        
        // Combinando los valores distintos de cero con los ceros al final
        $array = array_merge($sinCeros, $ceros);
        
        // Mostrar el resultado
        
        var_dump($array);

        // este ejercicio no lo he podido resolver solo, he tenido que buscar distintos tipos de resolverlo despues de provar sin exito 
    
        ?>
    </body>
</html>