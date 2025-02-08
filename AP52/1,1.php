<?php 
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>AP 52</title>
</head>
<body>
    <h1>Ejercicio 1 correción webinar</h1>
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
    echo "ANTES<br>";
    show($meteorologicalData);
    $meteorologicalData =  fixPressure(1, $meteorologicalData);
    echo "<br>DESPUES<br>";
    show($meteorologicalData);
    echo "MEDIA<br>";
    echo"La media es: ". averageTemperature($meteorologicalData);
    
    function fixPressure(int $numStation, array $data): array{
        ($data[$numStation]['temperature'] < 30)
        ? $data[$numStation]['atmosphericPressure'] *= 1.15
        : $data[$numStation]['atmosphericPressure'] *= 1.25;
        

        return $data;
    }
    //debe mostrará por pantalla la información de todas las estaciones.
    
    function show(array $data): void{
        $stationNumber = 0;
        foreach($data as $station){
            echo "ESTACION : $stationNumber<br> "; 
            foreach($station as $key => $value){
                echo "$key: $value<br>";
            }
            $stationNumber += 1;
        }    
    }

    //debe devolver la media aritmética de temperaturas
    function averageTemperature(array $data):float{
        $average = 0;
        foreach($data as $key => $value){
            $average = $average + $value['temperature'];
            
        }
        return $average/count($data);
    }
    ?>
</body>
</html>