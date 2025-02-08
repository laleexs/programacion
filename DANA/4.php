<!DOCTYPE html>
<html>
    <head>
        <tittle>Dana</tittle>
    </head>
    <body>
        <h1>Ejercicio 4</h1>
   
        <?php
        /* 
        */
        //crear dos arrays calles y estadoCalles
        $calles = [];
        $estadoCalles = [];
        $intransitable = 0;
        //hacer 50 registros Calle1,Calle2
        for($i = 1; $i <= 50;$i ++) {
            $calles[$i] = "Calle$i";
            $estadoCalles[$i] = rand(0,3);
            if($estadoCalles[$i] == 0){
                echo "$calles[$i] esta en el estado sin daño<br><br>";
            }elseif($estadoCalles[$i] == 1){
                echo "$calles[$i] esta en el estado dañado<br><br>";
            }else{
                echo "$calles[$i] esta en el estado intransitable<br><br>";
                $intransitable ++;
           
            }
           
        }
        if ($intransitable > 10){
            echo "ALERTA POR CALLES INTRANSITABLES<br><br>";
        }

       

        ?>
    </body>
</html>