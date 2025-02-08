<!DOCTYPE html>
<html>
    <head>
        <tittle>AP41</tittle>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
        <form method="POST">
            <label for="number">numero</label>
            <input name="number"><br><br>
           
            <input type="submit" value="enviar"><br><br>

        </form>
        <?php
        /* EJERCICIO 3. Crea un programa que calcule la letra de un DNI en base al número pasado.
         El cálculo resulta de obtener el resto de la división del número entre 23, y con este número,
          seleccionar la letra de una lista por posición, es decir, si el número es 14, entonces la letra 14 ,
           dado que se corresponde con la posición 14 de la secuencia TRWAGMYFPDXBNJZSQVHLCKE.
         */

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $number = $_POST["number"];
            $dni = "TRWAGMYFPDXBNJZSQVHLCKE";
            $dniArray = str_split($dni); // convertimos la string a array con str_split() en el cual hace que cada caracter sea un elemento diferente  
            var_dump($dniArray);

            $rest = $number % 23; // calculando el resto del numero de POST entre las 23 letras del dni
            echo "El letra de nuestro DNI es: $dniArray[$rest]"; 

        }
        ?>
    </body>
</html>