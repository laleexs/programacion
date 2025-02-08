<!DOCTYPE html>
<html>
    <head>
        <tittle>Dana</tittle>
    </head>
    <body>
        <h1>Ejercicio 2</h1>
   
        <?php
        /* 
        */
        // crear array multidimensional de 5 filas y 24 columnas
        $horas= [];
        $precipitation = [];
        $maxima = 0;
        for($i = 0; $i < 5; $i ++){
            $precipitation[$i] = 0; // Inicializamos $precipitation[$i] a 0
            for($j = 0; $j < 24; $j ++){
                $horas[$i][$j]= rand(0,100);
                $precipitation[$i] += $horas[$i][$j];
                
            }
        if($precipitation[$i] > $maxima){
            $maxima = $precipitation[$i];
        }
           
        }

        foreach($horas as $estacion){
            echo"<h2>Estación</h2>";
            echo"<ul>";  //imprime la apertura de una lista HTML <ul>, que significa "unordered list" o "lista desordenada". Esto servirá para enumerar los valores de esa estación.
            foreach($estacion as $value){
                echo "<li>$value</li>"; //echo "<li>$value</li>"; imprime cada valor de $estacion dentro de un elemento de lista <li>. De esta manera, se listan todos los valores de la estación dentro de la lista desordenada <ul>.
            }
            echo "</ul>";
        }
        
        foreach($precipitation as $valor){
            echo" acumulado de cada estacion $valor <br><br>";
        }

        ?>
    </body>
</html>