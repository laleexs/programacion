<!DOCTYPE html>
<html>
    <head>
        <tittle>AP42 </tittle>
    </head>
    <body>
        <h1>Ejercicio 10</h1>
        
        <?php
        /*
        Ejercicio 10.- Crea un script para encontrar y mostrar el array dividido en otros dos, de forma que sumen lo mismo a ambos lados de la división. Suponemos que el array que le pasamos cumple la premisa. Por ejemplo:

        [1, 3, 3, 8, 4, 3, 2, 3, 3] se puede dividir de forma que

        [1,3,3,8]=15
        [4,3,2,3,3]=15

        Puedes usar las funciones que quieras.
        */

        $array = [1, 3, 3, 8, 4, 3, 2, 3, 3];

        $indice1 = 0;
        $indice2 = 1;
        $found = false;

        while( $indice2 <= count($array)){
            // array_slice se utiliza para extraer una porción de un array sin modificar el array original.
            $array1 = array_slice($array, $indice1, $indice2);
            $array2 = array_slice($array, $indice2);

            if (array_sum($array1) === array_sum($array2)){
                echo "la suma de los arrays es la misma<br><br>";
                //bandera para saber que hemos encontrado un division equilibrada
                $found = true;
                break;
            }
            $indice2++;
        }

        if($found != true){
            echo "El array no se puede dividir en dos partes que sumen lo mismo.<br><br>";
        }

       
        echo  "el array: ". implode("-",$array1)." da de sumatorio: ".array_sum($array1)."<br><br>";
        echo  "el array: ". implode("-",$array2)." da de sumatorio: ".array_sum($array2)."<br><br>";


        ?>
    </body>
</html>