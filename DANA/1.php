<!DOCTYPE html>
<html>
    <head>
        <tittle>Dana</tittle>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
   
        <?php
        /* 
        */
        // crear array indexado para representar cada hora del dia
        $horas= [];
        $precipitation = 0;
        for($i=0; $i<24; $i++){
            $horas[$i]= rand(0,100);
            $precipitation += $horas[$i];
            
            if ($horas[$i] > 50){
                echo "Alerta: $horas[$i] es mayor que 50 <br><br>";
            }else{
                echo $horas[$i]."<br><br>" ;
            }
        }
        echo "EL total de las precipitaciones es $precipitation ";

        ?>
    </body>
</html>