<!DOCTYPE html>
<html>
    <head>
        <tittle>AP42 </tittle>
    </head>
    <body>
        <h1>Ejercicio 6</h1>
        
        <?php
        /*Ejercicio 6.- Haz un array con 10 notas. A continuación, elimina la nota mas baja y la más alta (solo una, en caso de estar repetida).
        Haz la media de las que quedan. Puedes comprobar si los datos són numéricos con la función is_numeric. Además puedes usar también 
        array_splice y implode si te son útiles.
        */
        
        //inicializando arrays
        $array= [5,2,3,4,5,4,7,8,9,10];
        
        //valor minimo del array
        $minValue = min($array);
        
        //array_search Devuelve el índice del primer elemento que coincide con el valor mínimo 
        $minIndex = array_search($minValue,$array); // primero lo que se busca, despues donde lo busca
        
        //borramos el valor minimo
        array_splice($array,$minIndex ,1);
        
        //valor mazimo del array
        $maxValue = max($array);
        
        //indice del valor maximo una vez borrado el minimo 
        $maxIndex = array_search($maxValue,$array);
        
        //borramos el valor maximo
        array_splice($array,$maxIndex ,1);
        
        
        //muestra el array al final 
        var_dump($array);
        
        echo "valores borrados $minValue y $maxValue"; 
        
        
        ?>
    </body>
</html>