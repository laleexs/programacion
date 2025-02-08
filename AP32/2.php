<!DOCTYPE html>
<html>
<head>
    <title>AP32</title>
</head>
<body>
    <h1>Ejercicio 2</h1>

    <?php
    /* Ejercicio 2.- La asociación de vinicultores tiene como política fijar
     un precio inicial al kilo de uva, la cual se clasifica en tipos A y B,
      y además en tamaños 1 y 2.
     Cuando se realiza la venta del producto, ésta es de un solo tipo y 
     tamaño, se requiere determinar cuánto recibirá un productor por la uva
     que entrega en un embarque, considerando lo siguiente:

     Si es de tipo A, se le cargan 20 céntimos al precio/kg inicial cuando 
        es de tamaño 1 y 30 céntimos si es de tamaño 2.
     Si es de tipo B, se rebajan 30 céntimos al precio/kg cuando es de
        tamaño 1, y 50 céntimos cuando es de tamaño 2.
     */

     $tipo = $_GET['tipo'];
     $tamanyo = $_GET['tamanyo'];

     if ($tipo == "A") {
        switch($tamanyo){
            case 1;
                $precio = 20;
                break;
            case 2;
                $precio = 30;
                break;
            default;
                echo "El tamanyo no es correcto";
        }
     }elseif ($tipo == "B"){
        switch($tamanyo){
            case 1;
                $precio = 30;
                break;
            case 2;
                $precio = 50;
                break;
            default;
                echo "El tamanyo no es correcto";
        }   
    } else {
        echo " El tipo no es correcto";
    }

    echo " El precio del kg es : ". $precio . " centimos el kilo";
    ?>


    
</body>
</html>
