<!DOCTYPE html>
<html>
<head>
    <title>AP32</title>
</head>
<body>
    <h1>EJERCICIO 1</h1>

    <?php

       $numero_personas = $_GET["personas"];

        switch($numero_personas){
            case $numero_personas < 200 ;
                $precio = 95;
                break;
            case  $numero_personas > 200 && $numero_personas <= 300;
                $precio = 85;
                break;
            case  $numero_personas > 300;
                $precio = 75;
                break;
        }

        $presupuesto = $numero_personas * $precio;
        echo "El presupuesto del evento para ". $numero_personas . " personas es de: " . $presupuesto . " euros. " . $precio . " euros por persona."
    ?>


    
</body>
</html>
