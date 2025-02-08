<!DOCTYPE html>
<html>
    <head>
        <tittle>AP51 </tittle>
    </head>
    <body>
        <h1>Ejercicio 2</h1>
        <form method="POST">
                <label for="numero">Numero a transformar: </label>
                <input type = "number" name= "numero" min = "1" max = "10" required><br><br>
            
                <input type="submit" value = "enviar"><br><br>
        </form>
        <?php
        /*
        EJERCICIO 2.- Programa que tras leer un número entre 1 y 10, muestre su equivalente en número romano. 
        Debes utilizar una función numRomano que reciba el número en formato decimal y lo devuelva en formato romano.
        */


        //verificando que el tipo de entrada es POST
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //se le pasa por post el numero para pasar a romano
            $numero = $_POST["numero"];

        //DEFINICION DE FUNCIONES

        function numRomano($numero){
            $numerosRomanos = ["I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X"];
            $numeroConvertido = $numerosRomanos[$numero - 1];
            return $numeroConvertido;
        }
        
        //llamando a la funcion 
        $nuevoNumero = numRomano($numero);
        echo "El numero $numero es $nuevoNumero en formato romano.";
        
        
        }

        ?>
    </body>
</html>