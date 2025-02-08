<!DOCTYPE html>
<html> 
<head>
    <title>AP32</title>
</head>
<body>
    <h1>Ejercicio 10</h1>

    <?php
    /* jercicio 10.- Una empresa tiene el registro de las horas que trabaja diariamente un empleado durante 
    la semana (seis días) y requiere determinar el total de éstas, así como el sueldo que recibirá por las
    horas trabajadas.
    */

    $precioHora = 10;
    $totalHoras = 0;
    $totalSueldo = 0;

    for($i = 1; $i <= 6; $i++){
        $horas = rand(1,8);
        $sueldo = $horas * $precioHora;
        $totalHoras += $horas;
        $totalSueldo += $sueldo;
        echo "total de horas: " . $totalHoras . " total sueldo: " . $totalSueldo ." horas al dia $horas <br>" ; 
    }

    
    ?>
</body>
</html>