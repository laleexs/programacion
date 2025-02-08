<!DOCTYPE html>
<html>
    <head>
        <tittle>AP42 </tittle>
    </head>
    <body>
        <h1>Ejercicio 2</h1>
        
        <form method="POST">
            <?php
                //blucle para generar 10 input para introducir numeros dentro de un array
                for($i = 0; $i < 10; $i++){
                    echo " Introducir numero: <input name='number[]' required><br><br>";
                }
            ?>
            <input type="submit" value="enviar"><br><br>

        </form>

        <?php
        /* Ejercicio 2.- Escribe un script para encontrar los duplicados sin usar funciones de array.
        Coloca estos valores previamente en un array.
        */

        //verificando que el formulario a sido enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $numbers =[];

        //pasando al la variable numbers el array que sacamos por el formulario gracias a name='number[]' 
        $numbers= $_POST['number'];

        //inicializando el array dublicados
        $duplicados = [];

        // bucle para recorrer el array y buscar los duplicados
        for($i=0; $i < count($numbers); $i++){
            //segundo bucle para que una vez cambie al siguiente numero, los compruebe con todos los que le suceden
            for($j=$i + 1 ; $j < count($numbers); $j++){
                //comprobamos si se repiten numeros
                if($numbers[$i] == $numbers[$j]){
                    //introducimos en el array vacio duplicados el numero repetido
                    $duplicados[] = $numbers[$j];
                }
            }
        }

        
        }

        // mostrando el array numbers 
        var_dump($numbers);

        //mostramos el array duplicados, quitamos los elementos duplicados del array
        var_dump(array_unique($duplicados));
        
        

        ?>
    </body>
</html>