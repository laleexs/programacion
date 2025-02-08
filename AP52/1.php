<?php 
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>AP 52</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php


    /*Ejercicio.- Realiza un script en PHP, a partir del array de datos siguiente:

        <?php
        $meteorologicalData = [
            [
                'station' => 'Catarroja',
                'temperature' => 15,
                'humidity' => 85,
                'atmosphericPressure' => 1024
            ],
            [
                'station' => 'Alzira',
                'temperature' => 35,
                'humidity' => 75,
                'atmosphericPressure' => 1000
            ],
            [
                'station' => 'Almussafes',
                'temperature' => 17,
                'humidity' => 95,
                'atmosphericPressure' => 950
            ],
            [
                'station' => 'Carlet',
                'temperature' => 31,
                'humidity' => 55,
                'atmosphericPressure' => 850
            ]
        ];
        ?>
        Se ha detectado que algunas estaciones tienen un fallo de software. Cuando se notifica este fallo, 
        el usuario puede corregir el dato mediante la llamada a la función fixPressure, cuyo cometido será 
        cambiar este dato, teniendo en cuenta que la estación averiada mide:

                un 15% menos de presión atmosférica respecto a la presión real si la temperatura es menor a 30ºC

                o un 25% menos a partir de una temperatura de 30ºC o más

                A la función se le pasará como parámetro la estación averiada (será un número) y el array que quiero corregir (todo por valor).

                Devolverá el array con los datos correctos.

        Crea la función show, que debe mostrará por pantalla la información de todas las estaciones. Servirá sobre todo para mirar el índice 
        de la estación que queremos corregir para pasárselo al punto anterior

        Cada vez que corrijamos una estación, debemos volver a mostrar la lista completa para que se vea el cambio realizado.
        Crea la función averageTemperature, que debe devolver la media aritmética de temperaturas de las diferentes estaciones meteorológicas. 
        Se le pasará como parámetro el array de las estaciones.
            */
    
    $meteorologicalData = [
        [
            'station' => 'Catarroja',
            'temperature' => 15,
            'humidity' => 85,
            'atmosphericPressure' => 1024
        ],
        [
            'station' => 'Alzira',
            'temperature' => 35,
            'humidity' => 75,
            'atmosphericPressure' => 1000
        ],
        [
            'station' => 'Almussafes',
            'temperature' => 17,
            'humidity' => 95,
            'atmosphericPressure' => 950
        ],
        [
            'station' => 'Carlet',
            'temperature' => 31,
            'humidity' => 55,
            'atmosphericPressure' => 850
        ]
    ];
    
    //Devolverá el array con los datos correctos.
    function fixPressure( $station, $array):int{
        $pressure = (float)$array[$station]['atmosphericPressure'];
        // lo que devuelve se pasa a int para que no de error / lo del return es como un if pero con terciarias
        $newPreassure = (int)(($array[$station]['temperature'] < 30)
        ? $pressure * 1.15
        : $pressure * 1.25);
        
        return $array[$station]['atmosphericPressure'] = $newPreassure;

    }
    //debe mostrará por pantalla la información de todas las estaciones.
    function show($array):string{
        return print_r($array, true);
    }

    //debe devolver la media aritmética de temperaturas
    function averageTemperature($array):float{
        $average = 0;
        foreach($array as $key => $value){
            $average = $average + $value['temperature'];
            
        }
        return $average/count($array);
    }
    
    echo show($meteorologicalData)."<br><br>";
    echo  "la media aritmetica de las temperaturas son : ". averageTemperature($meteorologicalData)."<br><br>";

    //la llamada a la funcin de abajo saca el parametro modidicado pero no muestra el array entero con los datos correctos
    echo fixPressure(0, $meteorologicalData)."<br><br>";
    echo fixPressure(1, $meteorologicalData)."<br><br>";
    echo fixPressure(2, $meteorologicalData)."<br><br>";
    echo fixPressure(3, $meteorologicalData)."<br><br>";
    var_dump($meteorologicalData);

    echo show($meteorologicalData)."<br><br>";
    ?>
</body>
</html>