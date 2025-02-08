<!DOCTYPE html>
<html>
    <head>
        <tittle>Dana</tittle>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
   
        <?php
        /* 
        */
        // crear array 
        $array = [];

        // Rellenar con valore aleatorios 
        for($i = 0;$i < 10; $i++) {
            $array[$i] = rand(0,100);
        }

        //iterar array
        for($i = 0;$i < count($array); $i++) {
            //clasificar nivel de riesgo
            if ($array[$i] < 20){
                echo" $array[$i] es de riesgo bajo.<br><br>";    
            }elseif($array[$i] <= 50){
                echo" $array[$i] es de riesgo medio.<br><br>";
            }else {
                echo" $array[$i] es de riesgo alto.<br><br>";
            }
        }

       

        ?>
    </body>
</html>