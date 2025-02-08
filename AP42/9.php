<!DOCTYPE html>
<html>
    <head>
        <tittle>AP42 </tittle>
    </head>
    <body>
        <h1>Ejercicio 8</h1>
        <form method="POST">

            <label for="diference">diferencia:</label>
            <input name= "diference" required><br><br>
        
        

            <input type="submit" value="enviar"><br><br>

        </form>

        <?php
        /*Ejercicio 9.- Crea un script para encontrar pares de números que tienen un diferencia pasada por teclado, 
        por ejemplo: si la diferencia es 53, el par que cumple la condición es (39,92), tomando como array de datos [1, 15, 39, 75, 92].
        
        */
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // Convertimos a entero para evitar errores
            $diference = (int)$_POST["diference"];
            $array = [1, 15, 39, 75, 92];
            $newArray = [];      
            
            for($i=0; $i< count($array); $i++){
                for($j=$i + 1; $j< count($array); $j++){
                    // abs sirver para tener un valor absoluto, sin signos de positivo o negativo
                    if (abs($array[$i] - $array[$j]) == $diference){
                        echo " los numeros $array[$i] y $array[$j] tienen $diference de diferencia absoluta" ;
                    }
                }
                
            }
        }
        ?>
    </body>
</html>