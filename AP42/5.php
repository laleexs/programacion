<!DOCTYPE html>
<html>
    <head>
        <tittle>AP42 </tittle>
    </head>
    <body>
        <h1>Ejercicio 5</h1>
        
        <?php
        /* Ejercicio 5.- Crea un script para contar cuantas repeticiones de cada valor aparecen en un array.
        Puedes usar la función in_array  y array_push si las consideras aplicable.
        */

        //inicializando arrays
        $array= [1,2,3,4,5,4,7,8,9,10];
        

        /* he encontrado la funcion array_count_values($array)Esta función cuenta todas las ocurrencias de cada 
        valor en un array y devuelve un nuevo array asociativo donde las claves son los valores originales y los
        valores son la cantidad de veces que se repiten.
         */
        $repeticiones = array_count_values($array); //genera un array asociativo

        //muestra el array
        var_dump($repeticiones);

    
      
        ?>
    </body>
</html>