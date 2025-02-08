<!DOCTYPE html>
<html>
    <head>
        <tittle>AR31</tittle>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
        <form method="POST">
            <label for="zona">A que zona quieres enviar el paquete? (1, 2, 3, 4 y 5) </label>
            <input name="zona"><br><br>

            <label for="weigth">Peso del paquete?</label>
            <input name="weigth"><br><br>
            
            <input name="enviar" type="submit"><br><br>

        </form>
    <?php
/* Ejercicio 3.- Una compañía de paquetería internacional tiene servicio en países de América,
 África, Oceanía, Europa y Asia. El coste por el servicio de paquetería se basa en el peso del
  paquete y la zona a la que va dirigido:

        ZONA  	  UBICACIÓN  	  COSTE/gr
        1	        América	        11.00€
        2	        África      	10.00€
        3	        Oceanía        	12.00€
        4       	Europa      	24.00€
        5       	Asia	        27.00€
Parte de su política implica que los paquetes con un peso superior a 5 kg no son transportados,
 esto por cuestiones de logística y de seguridad. Realiza un algoritmo para determinar el cobro 
 por la entrega de un paquete o, en su caso, el rechazo de esta entrega.

Se introducirá la zona y el peso en gramos. 
*/
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $zona = $_POST['zona'];
        $weigth = $_POST['weigth'] * 1000; // pasado de kg a gr
        $zona1 = 11;
        $zona2 = 10;
        $zona3 = 12;
        $zona4 = 24;
        $zona5 = 27;
        $price = 0;

        if ($weigth <= 5000){
            switch($zona){
                case "1";
                    $price = $weigth * $zona1;
                    break;
                case "2";
                    $price = $weigth * $zona2;
                    break;
                case "3";
                    $price = $weigth * $zona3;
                    break;
                case "4";
                    $price = $weigth * $zona4;
                    break;
                case "5";
                    $price = $weigth * $zona5;
                    break;

            }
        echo "EL precio total es $price :";
        
        }else{
            echo "La entrega ha sido rechazada<br>";
        }
    }
    
    ?>
    </body>
</html>