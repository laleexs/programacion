<!DOCTYPE html>
<html>
    <head>
        <tittle>AP42 </tittle>
    </head>
    <body>
        <h1>Ejercicio 8</h1>
        
        <?php
        /*Ejercicio 8.- Crea un script para realizar la transposición del array bi-dimensional, es decir, convertir las columnas en filas,
        y las filas en columnas, por ejemplo:

        [ 1, 5, 8, 5]
        [ 7, 3, 2, 4]
        [ 1, 6, 2, 4]

        Se convertiría en:

        [ 1, 7, 1 ]
        [ 5, 3, 6 ]
        [ 8, 2, 2 ]
        [ 5, 4, 4 ]

        Puedes usar las funciones que quieras.
        */
        
        $array=[[ 1, 5, 8, 5],
                [ 7, 3, 2, 4],
                [ 1, 6, 2, 4]
                ];
        $newArray= [[],[]];

        for($i = 0; $i < count($array); $i++){
            for($j = 0; $j < count($array[$i]); $j++){
                $newArray[$j][$i] = $array[$i][$j];  
            }
        }

        for($i = 0; $i < count($newArray); $i++){
            for($j = 0; $j < count($newArray[$i]); $j++){
                echo $newArray[$i][$j];   
            }
            echo"<br>";
        }



        var_dump($array);
        var_dump($newArray);
        ?>
    </body>
</html>