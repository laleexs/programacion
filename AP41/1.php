<!DOCTYPE html>
<html>
    <head>
        <tittle>AP41</tittle>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
        <form method="POST">
                <label for="number0">Escribe un el 1er numero del vector</label>
                <input name= "number0"><br><br>
                <label for="number1">Escribe un el 2do numero del vector</label>
                <input name= "number1"><br><br>
                <label for="number2">Escribe un el 3ro numero del vector</label>
                <input name= "number2"><br><br>
                <label for="number3">Escribe un el 4to numero del vector</label>
                <input name= "number3"><br><br>
                <label for="number4">Escribe un el 5to numero del vector</label>
                <input name= "number4"><br><br>

                <input type="submit" value = "enviar"><br><br>
        </form>
        <?php
        /*  EJERCICIO 1. Desarrollar un programa en el que se pida al usuario un vector de 5 números enteros
         e indique en pantalla la media aritmética de todos sus elementos.
        */
        
        //verificando que el tipo de entrada es POST
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $numbers = [];
            $i = 0;
            $amount= 0;

            // bucle for para meter los numeros que entran dentro del array, creo que no es lo correcto!
             for($i = 0 ; $i < 5 ; $i++){
                $numbers[$i]=$_POST["number$i"];
             }
              // blucle que va sumando cada uno de los elementos del array 
             for($i = 0 ; $i < 5 ; $i++){
                $amount += $numbers[$i];    
             }
             // Divide la suma de todos los elementos del array antes calculado para hacer la media
             $average = $amount / 5;

             // muestra visualmente como seria el array:
             echo "El array numbers seria asi: numbers [ $numbers[0] , $numbers[1] , $numbers[2] , $numbers[3] , $numbers[4] ] <br><br>";
             echo "La media es: $average";
        }
        ?>
    </body>
</html>