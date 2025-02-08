<!DOCTYPE html>
<html>
    <head>
        <tittle>AP51 </tittle>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
        <form method="POST">
                <label for="hermano1">Edad del hermano 1: </label>
                <input name= "hermano1"><br><br>
                <label for="hermano2">Edad del hermano 2: </label>
                <input name= "hermano2"><br><br>
                <input type="submit" value = "enviar"><br><br>
        </form>
        <?php
        /*
        EJERCICIO 1.- Programa que pida la edad de 2 hermanos e informe de la diferencia de edad existente entre ambos. 
        Debes utilizar una función diferenciaEdad, que reciba las dos edades y retorne en valor positivo la diferencia entre ambos.
        */


        //verificando que el tipo de entrada es POST
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //se le pasa por post la edad del primer hermano
            $hermano1 = $_POST["hermano1"];
            //se le pasa por post la edad del segundo hermano 
            $hermano2 = $_POST["hermano2"];

        //DEFINICION DE FUNCIONES

        function diferenciaEdad($hermano1, $hermano2){
            $resultado = abs($hermano1 - $hermano2);
            echo "la diferencia de edad es: $resultado";
        }
        
        //llamando a la funcion 
        diferenciaEdad($hermano1, $hermano2);
        
        
        }

        ?>
    </body>
</html>