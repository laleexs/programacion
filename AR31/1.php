<!DOCTYPE html>
<html>
    <head>
        <tittle>AR31</tittle>
    </head>
    <body>
        <h1>EJERCICIO 1</h1>

        <form method="POST">
            <label for="cantidad">Cuantas hamburguesas?:</label>
            <input name="cant"><br><br>

            <label for="tipo">Tipo de hamburguesa? sencilla/ doble/ triple. </label>
            <input name="tipo"><br><br>

            <label for="tarjeta">Va a pagar con tarjeta? si/no. </label>
            <input name="tarjeta"><br><br>
            <input type="submit" value="enviar"><br><br>
        </form>
        <?php
        /* Ejercicio 1.- “El Pepinillo Grasiento” ofrece hamburguesas gourmet sencillas, dobles y triples,
         las cuales tienen un coste de 20.00€, 25.00€ y 28.00€ respectivamente. 
         La empresa acepta tarjetas de crédito con un cargo de 5 % sobre la compra.
          Suponiendo que los clientes adquieren sólo un tipo de hamburguesa, realiza un algoritmo para
           determinar cuánto debe pagar una persona por N hamburguesas del mismo tipo.
        */ 
        $cantidad = $_POST["cant"] ;
        $tipo =  $_POST["tipo"]  ;
        $tarjeta = $_POST["tarjeta"];
        $price = 0;
//verificando si entra por post
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            switch($tipo){
                case "sencilla";
                    $price = 20;
                    $totalPrice = $price * $cantidad;
                    break;
                case "doble";
                    $price = 25;
                    $totalPrice = $price * $cantidad;
                    break;
                case "triple";
                    $price = 28;
                    $totalPrice = $price * $cantidad;
                    break;
            }

            if ($tarjeta == "si"){
                $totalPrice = $totalPrice * 1.05;
            }
    
        }

        echo "El pago por " . $cantidad . " de hamburguesas tipo: ". $tipo .
             " es igual a $totalPrice euros";
           

        ?>
    </body>
</html>