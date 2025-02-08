<!DOCTYPE html>
<html>
<head>
        <title>AP32</title>
</head>

<body>
    <h1>Ejercio 6</h1>
    <?php
    /* Ejercicio 6.- Se requiere un algoritmo para determinar cuánto ahorrará una 
    persona en un año, si al final de cada mes deposita cantidades de dinero
     diferentes; además, se requiere saber cuánto lleva ahorrado cada mes.*/
     
    $ahorro = 0;
    $meses = 1;
     while ($meses <= 12){
        $ahorro += rand(1, 200);
        echo "tu ahorro en el mes $meses es de $ahorro euros<br>";
        $meses++;
     }
    ?>
</body>

</html>