<!DOCTYPE html>
<html>
    <head>
        <tittle>AP41</tittle>
    </head>
    <body>
        <h1>Ejercicio 4</h1>
    

        <?php
        /*EJERCICIO 4. Escribir un programa que simule el lanzamiento de dos dados. Haz uso de la función random_int() 
        para obtener números aleatorios entre 1 y 6 para cada uno de los lanzamientos de los dos dados. Esto se repite por cada jugador,
         siendo 2 el número de jugadores y 5 tiradas cada uno. Almacena en un array para cada tirada que jugador gana, o si empatan.

        Con el array generado de victorias y empates, calcula los porcentajes de partidas ganadas por el jugador 1,
        por el jugador 2 y los empates. 
         */

        $victories1 = []; //array de victorias jugador1     
        $victories2 = []; //array de victorias jugador2
        $ties = []; //array de empates
        

        for($i = 0; $i < 5; $i++) {
            $player1 = random_int(1,6);
            $player2 = random_int(1,6);
            if ($player1 > $player2){
                $victories1[$i] = 1; 
            }elseif ($player1 < $player2){
                $victories2[$i] = 1;
            }else{
                $ties[$i] = 1;
            }
        }

        $percentage1 = (count($victories1) / 5)* 100; // porcentaje de victorias del jugador1
        $percentage2 = (count($victories2) / 5)* 100; // porcentaje de victorias del jugador2
        var_dump($victories1). "<br><br>";
        var_dump($victories2). "<br><br>";
        var_dump($ties). "<br><br>";

        echo "El jugador 1 a ganado el $percentage1 % de las partidas. <br><br>"; 
        echo "El jugador 2 a ganado el $percentage2 % de las partidas. <br><br>";
        if (count($ties) > 0){   // si el array de empates no esta vacio , entonces se calcula y se muestra el echo, si no, no se muestra nada
            $percentageTies = (count($ties)/ 5)* 100;
            echo "El porcentaje de partidas empatadas es: $percentageTies %. <br><br>";
        }
        ?>
    </body>
</html>