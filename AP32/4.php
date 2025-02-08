<!DOCTYPE html>
<html>
<head>
    <title>AP32</title>
</head>
<body>
    <h1>Ejercicio 4</h1>

    <?php
    /* Ejercicio 4.- La política de precios de la compañía telefónica “Garra
     Phone” es que cuando se realiza una llamada, el cobro es por el tiempo
    que ésta dura, de tal
    forma que:

            los primeros cinco minutos cuestan 1.00€ el minuto
            los siguientes tres, 80 céntimos el minuto
            los siguientes dos minutos, 70 céntimos el minuto
            a partir del décimo minuto, 50 céntimos el minuto

    Además, se carga:

            un impuesto de 3 % cuando es domingo
            en día hábil por la mañana, 15 %
            en día hábil por la tarde, 10 %.
     */

    $dia = $_GET['dia'];
    $tiempo = $_GET['tiempo'];
    $momento = $_GET['momento'];

    if ($tiempo <= 5){
        $pago = $tiempo * 1;

    }elseif($tiempo <= 8) {
        $periodo1 = 5 * 1;
        $periodo2 = ($tiempo - 5) * 0.70;
        $pago = $periodo1 + $periodo2;

    }elseif($tiempo <= 10){
        $periodo1 = 5 * 1;
        $periodo2 = ($tiempo - 5) * 0.70;
        $periodo3 = ($tiempo - 8) * 0.50;
        $pago = $periodo1 + $periodo2 + $periodo3;
    }
     
    if($dia == "domingo"){
        $pagoFinal = $pago * 1.03;
   
    }elseif ($momento == "mañana"){
        $pagoFinal = $pago * 1.15;

    }elseif($momento == "tarde"){
        $pagoFinal = $pago * 1.10;
    }
    
    
    echo "El pago final sera : periodo 1 = $periodo1 + periodo 2 = $periodo2 + periodo 3 = $periodo3 = pago final $pagoFinal " ; 


   
    ?>


    
</body>
</html>
