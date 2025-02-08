<!DOCTYPE html>
<html>
    <head>
        <tittle>AP41</tittle>
    </head>
    <body>
        <h1>Ejercicio 2</h1>
        <form method="POST">
            <label for="number1">numero de elementos del primer array</label>
            <input name="number1"><br><br>
            <label for="number2">numero de elementos del segundo array</label>
            <input name="number2"><br><br>

            <input type="submit" value="enviar"><br><br>

        </form>
        <?php
        /*EJERCICIO 2. Desarrollar un programa en el que teniendo dos arrays de números enteros aleatorios ,
         se indique en pantalla el producto de los elementos que ocupan la misma posición. Si los Arrays
          proporcionados no tienen la misma longitud, se ha de escribir en pantalla un mensaje indicativo
           y no se realizará el proceso.
         */

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
            $length1 = $_POST["number1"]; // longitud array 1
            $length2 = $_POST["number2"]; // longitud array 2
            $array1 =[];
            $array2 =[];
            
            for ($i = 0; $i < $length1; $i++){ // introducciendo tantos datos como numero de la longitut del array1
                $array1[$i] = rand(1,50);
            }

            for ($j = 0; $j < $length2; $j++){ // introducciendo tantos datos como numero de la longitut del array2
                $array2[$j] = rand(1,50);
            }

            if($length1 == $length2){      // si la longitud que el usuario introduce por post es igual en ambos arrays, entonces podemos hacer la operación
                for($i = 0; $i < $length1; $i++){
                    $result= $array1[$i] * $array2[$i]; // el producto de los mismos elementos de los distintos arrays 
                    echo "el resultado del producto de la posicion $i de los arrays es: $array1[$i] * $array2[$i] = $result<br><br>";
                }
            }else{
                echo "No se realizará el proceso";
            }

        }
        ?>
    </body>
</html>