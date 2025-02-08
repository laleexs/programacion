<!DOCTYPE html>
<html>
    <head>
        <title>AR31</title>
    </head>
    <body>
        <h1>Ejercicio 4</h1>
        <form method="POST">
            <label for="limit">Limite actual</label>
            <input name="limit"><br><br>

            <label for="type">Tipo de tarjeta:(1,2,3, o cualquier otro tipo).</label>
            <input name="type"><br><br>

            <input type="submit" value = "enviar"><br><br>
        </form>
        <?php

/*  Ejercicio 4.- El banco “Pasta Gansa” ha decidido aumentar el límite de crédito de las tarjetas
 de crédito de sus clientes, para esto considera que:

        si su cliente tiene tarjeta tipo 1, el aumento será de 25 %
        si tiene tipo 2, será de 35 %
        si tiene tipo 3, de 40 %
        para cualquier otro tipo, de 50 %.

Realice un algoritmo para determinar el nuevo límite de crédito que tendrá una persona en su tarjeta.

Se introducirá el límite actual y el tipo de tarjeta.
 */
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $type = $_POST["type"];
            $limit = $_POST["limit"];

            if ($type == 1){
                $newLimit = $limit * 1.25;
            }elseif ($type == 2){
                $newLimit = $limit * 1.35;
            }elseif ($type == 3){
                $newLimit = $limit * 1.40;
            }else{
                $newLimit = $limit * 1.50;
            }

        
            echo "El nuevo limite es $newLimit para el tipo $type con antiguo limite $limit";
        }
        ?>
    </body>
</html>