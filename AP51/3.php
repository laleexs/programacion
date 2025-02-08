<!DOCTYPE html>
<html>
    <head>
        <tittle>AP51 </tittle>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
     
        </form>
        <?php
        /*
        EJERCICIO 3.- Programa que permita obtener una combinación de lotería primitiva (6 números entre 1 y 49). 
        Cada número debe generarse mediante la llamada a la función dameNumero(), que retornará un número al azar entre 1 y 49. 
        Los números no se pueden repetir.
        */
        
        //DEFINICION DE FUNCIONES

        function dameNumero(){
            $numerosLoteria = [];
            // mientras no sea 6 la longitud no saldra, porque pueden repetirse los numeros pero los repetidos no se deben guardar
            while(count($numerosLoteria) < 6){
                //generando un numero random 
                $numero = rand(1,49);
                // !in_array -> comprobado que el numero no esta en el arrray
                if (!in_array($numero, $numerosLoteria)) {
                    // si no esta entonces se añade al array
                    $numerosLoteria[] = $numero;
                }
            }
            // devuelve el array
            return $numerosLoteria;
        }
        
        //llamando a la funcion 
        $loteria = dameNumero();
        // pongo implode para convertir a una cadena porque con echo no puedo ver un array
        echo "el numero premiado es el: ". implode(", ", $loteria);
        /*
        El operador echo solo puede manejar tipos de datos simples como:
            Cadenas (string).
            Números (int, float).
            Booleans (convertidos a 1 o vacío).
        */ 

        ?>
    </body>
</html>