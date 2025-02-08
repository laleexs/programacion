<!DOCTYPE html>
<html>
    <head>
        <tittle>AR31</tittle>
    </head>
    <body>
        <h1>Ejercicio 2</h1>

        <form method="POST">
            <label for="tipo">Tipo de clave: (1, 2, 3, 4, 5 y 6)  </label>
            <input  name="tipo"><br><br>

            <label for="price">Precio de la materia Prima.  </label>
            <input  name="price"><br><br>

            <input type="submit" value="enviar"><br><br>
        </form>

        <?php 
/*
Ejercicio 2.- Fábricas “La Tuerca Feliz” produce artículos con claves (1, 2, 3, 4, 5 y 6). 
Se requiere un algoritmo para calcular los precios de venta, para esto hay que considerar lo
 siguiente:

Costo de producción = materia prima + mano de obra + gastos de fabricación.
Precio de venta = coste de producción + 45 % de coste de producción.

El coste de la mano de obra se obtiene de la siguiente forma:

        Para los productos con clave 3 o 4 se carga 75 % del coste de la materia prima;
        Para los que tienen clave 1 y 5 se carga 80 %
        Para los que tienen clave 2 o 6, 85 %.
        Para calcular el gasto de fabricación se considera:

si el artículo que se va a producir tiene claves 2 o 5, este gasto representa 30 % sobre el 
    coste de la materia prima
        si las claves son 3 o 6, representa 35 %
        si las claves son 1 o 4, representa 28 %.
La materia prima tiene el mismo coste para cualquier clave.

Se introducirá el precio de la materia prima y la clave del artículo.
 */
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $tipo = $_POST['tipo'];
            $price = $_POST['price'];
            $manoObra = 0;
            $gastoFrabricacion = 0;


        //coste mano de obra

            switch($tipo) {
                case "3";
                case "4";
                    $manoObra = $price * 1.75;
                    break;
                case "1";
                case "5";
                    $manoObra = $price * 1.8;
                    break;
                case "2";
                case "6";
                    $manoObra = $price * 1.85;
                    break;
            }

            //calcular gasto de fabricación:
            
            switch($tipo) {
                case "2";
                case "5";
                    $gastoFrabricacion = $price * 0.30;
                    break;
                case "3";
                case "6";
                    $gastoFrabricacion = $price * 0.35;
                    break;
                case "1";
                case "4";
                    $gastoFrabricacion = $price * 0.28;
                    break;
            }

            // costo de produccion

            $costoProduccion = $price + $manoObra + $gastoFrabricacion;

            // precio de venta

            $precioVenta = $costoProduccion + ($costoProduccion * 0.45);

            echo "EL precio del costo de producción de : $costoProduccion <br>";
            echo "El precio de venta es: $precioVenta <br>";
        }

        ?>
    </body>
    
</html>