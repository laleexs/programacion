<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>AEV51</title>
</head>
<body>
<?php

$pomodoroHaters = [
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', 'A', 'A', 'A', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '0', '0', '0', 'A', '0', 'A', 'A', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', 'A', 'A', '0', '0', 'A', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '0', 'A', 'A', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~']
];
$impacts = [
    [20, 4],
    [2, 13],
    [13, 12],
    [3, 17],
    [2, 13],
    [5, 19],
    [6, 18],
    [5, 2],
    [20, 13],
    [9, 7],
    [5, 9],
    [15, 16],
    [16, 13],
    [16, 9],
    [16, 0],
    [3, 19],
    [19, 8],
    [1, 16],
    [18, 4],
    [21, 23],
    [7, 17],
    [22, 15],
    [21, 6],
    [14, 8],
    [12, 23],
    [7, 7],
    [22, 4],
    [3, 21],
    [2, 3],
    [8, 11],
    [0, 4],
    [7, 21],
    [11, 4],
    [7, 15],
    [6, 17],
    [5, 19],
    [4, 19],
    [4, 7],
    [23, 21],
    [15, 20],
    [2, 9],
    [21, 2],
    [1, 13],
    [7, 10],
    [21, 5],
    [13, 17],
    [2, 14],
    [11, 14],
    [22, 17],
    [18, 22],
    [2, 23],
    [3, 1],
    [18, 6],
    [17, 12],
    [18, 18],
    [20, 2],
    [3, 14],
    [11, 21],
    [6, 5],
    [6, 2],
    [12, 23],
    [18, 18],
    [21, 6],
    [10, 12],
    [5, 4],
    [16, 19],
    [8, 10],
    [12, 21],
    [15, 1],
    [20, 14],
    [3, 20],
    [6, 19],
    [20, 13],
    [15, 4],
    [10, 2],
    [5, 16],
    [20, 1],
    [12, 13],
    [11, 5],
    [12, 14],
    [8, 3],
    [6, 8],
    [19, 7],
    [16, 9],
    [13, 20],
    [3, 5],
    [1, 0],
    [20, 14],
    [12, 21],
    [12, 16],
    [15, 7],
    [9, 1],
    [1, 18],
    [20, 6],
    [8, 6],
    [22, 1],
    [10, 22],
    [19, 19],
    [7, 16],
    [8, 8]
];

//ESCRIBE AQUÍ TU PROGRAMA PRINCIPAL
$pomodoroHatersMod = [] ;
echo "MAPA ORIGINAL<br>";
show($pomodoroHaters);
echo "<br>MAPA CON IMPACTOS URBANOS<br><br>";

$pomodoroHatersMod = showUrbanInpacts($impacts, $pomodoroHaters);
show($pomodoroHatersMod);
$liters = howMuchEyeDrop($pomodoroHatersMod) * 25/1000;

echo "<br>HAY UN TOTAL DE: ". howMuchEyeDrop($pomodoroHatersMod) ." PERSONAS AFECTADAS SE NECESITA UN TOTAL DE
". $liters ." litros DE COLIRIO<br><br>";
;

echo "MAPA CON IMPACTOS URBANOS, NO URBANOS Y MAR<br><br>";
$pomodoroHatersModUpdate = updateUninhabitedTerritory($impacts, $pomodoroHatersMod);
show($pomodoroHatersModUpdate);
echo "DAÑOS TOTALES<br><br>";

echo "HA HABIDO UNOS DAÑOS TOTALES DE " . damageCount($pomodoroHatersModUpdate) . " €<br><br>";
$totalSeaAffected = totalSeaAffected($pomodoroHatersModUpdate);

echo "HAY $totalSeaAffected  km^2 AFECTADOS DE UN TOTAL DE " . totalSea($pomodoroHatersModUpdate) . " km^2 DE MAR <br><br>";

$tons = round(2000 / totalSea($pomodoroHatersModUpdate))* $totalSeaAffected ;

echo "HAY UN TOTAL DE $tons TONELADAS DE PESACADO <br><br>";
$tonsKg = $tons * 1000;
$collect = $tonsKg * 5;

echo "PODEMOS GANAR $collect € VENDIENDO PESCADO <br><br>";


//ESCRIBE AQUÍ LA DEFINICIÓN DE LAS FUNCIONES

function show(array $data):void{
    echo "<div class='map'>";
    foreach($data as $line){
        foreach($line as $value){
            echo "<span class='map-value'>$value</span>";
        }
    echo "<br>";
    }
    echo"</div>";
} 

function showUrbanInpacts(array $data1, array $map): array{
    foreach($data1 as $index){
        $line = $index[0];
        $column = $index[1];

        if($map[$line][$column] == "A"){
            $map[$line][$column] = "C";
        }  
    }
    return $map;
} 

function howMuchEyeDrop(array $map):int { 
    $UrbanCenters = 0;
    $population = 5000; 
    $affectedPeople = 0;
    
    foreach($map as $line){
        foreach($line as $value){
            if($value === "C"){
                $UrbanCenters ++;
            }
        }
    } 
    $affectedPeople = $population * $UrbanCenters;
    return $affectedPeople; 
}

function updateUninhabitedTerritory(array $data1, array $map): array{
    foreach($data1 as $index){
        $line = $index[0];
        $column = $index[1];

        if($map[$line][$column] === "0"){
            $map[$line][$column] = "X";
        }elseif($map[$line][$column] === "~"){
            $map[$line][$column] = "S";
        }
    }
    return $map;
}

function damageCount(array $map):int {
    $urbanDamage = 0;
    $urbanPrice = 200000;
    $noUrbanDamage = 0;
    $noUrbanPrice = 50000;
    $totalDamage = 0;

    foreach($map as $line){
        foreach($line as $value){
            if($value == "C"){ // urban 
                $urbanDamage ++;
            }elseif($value == "X"){ //no Urban 
                $noUrbanDamage ++;
            }
        }
    }
    $totalDamage = ($urbanDamage * $urbanPrice)+($noUrbanDamage * $noUrbanPrice);
    return $totalDamage;
}

function totalSea(array $map): int{
    $sea = 0;
    foreach($map as $line){
        foreach($line as $value){
            if($value === "~" || $value === "S"){
                $sea ++;
            }
        }
    }
    return $sea;
}

function totalSeaAffected(array $map): int{
    $seaAffected = 0;

    foreach($map as $line){
        foreach($line as $value){
            if($value == "S") {
                $seaAffected ++;
            }
        }
    }
    return $seaAffected;
}

?>
</body>
</html>

