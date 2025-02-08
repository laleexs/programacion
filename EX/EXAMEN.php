<?php
    session_start();
?>
<html>
<head>
    <title>ex1aEval</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosEX.css">
</head>
<body>
<div class="container-form">

    <h1>Examen 1a Evaluación</h1>
    <!--formulario para recoger las filas y columnas de inicio y fin-->
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST['submit']) && $_POST["submit"] === "Register") { // si presionamos el boton submit con el valor register entonces hace lo siguiente
            
                echo "<br>Fila inicio ". $filaInicio = htmlspecialchars($_POST['filaInicio'] ?? "", ENT_QUOTES);
                echo "<br>Columna Inicio ". $columnaInicio = htmlspecialchars($_POST['columnaInicio'] ?? "", ENT_QUOTES);
                echo "<br>Fila Fin " . $filaFin = htmlspecialchars($_POST['filaFin'] ?? "", ENT_QUOTES);
                echo "<br>Columna Fin ". $columnaFin = htmlspecialchars($_POST['columnaFin'] ?? "", ENT_QUOTES);
            }
        }
    ?>
    <form method="post" action="" class ="mt-01">
        <div class= "mb-1">
            <label for="filaInicio" class="form-label">Fila Inicio</label>
            <input type="number" name="filaInicio" min="1" max="6" required >
        </div>
        <div class= "mb-2">
            <label for="columnaInicio" class="form-label">Columna Inicio</label>
            <input type="number" name="columnaInicio" min="1" max="6" required>
        </div>
        <div class= "mb-3">
            <label for="filaFin" class="form-label">Fila Fin</label>
            <input type="number" name = "filaFin" min="1" max="6" required>
        </div>
        <div class= "mb-4">
            <label for="columnaFin" class="form-label">Columna Fin</label>
            <input type="number" name = "columnaFin" min="1" max="6" required>
        </div>
        <input type="submit" name="submit" value="Register" class="form-control">
    </form>
</div>
</body>
</html>
    
<?php
    $numeros = [1,2,3,4,5,6];
    $colores = ['RED','YEL','GRE','BLU','BLA','WHI'];
    /*usa esto si no los generas tú
    $combinaciones=[[1,'RED'],[1,'YEL'],[1,'GRE'],[1,'BLU'],[1,'BLA'],[1,'WHI'],[2,'RED'],[2,'YEL'],[2,'GRE'],[2,'BLU'],[2,'BLA'],[2,'WHI'],[3,'RED'],[3,'YEL'],[3,'GRE'],[3,'BLU'],[3,'BLA'],[3,'WHI'],[4,'RED'],[4,'YEL'],[4,'GRE'],[4,'BLU'],[4,'BLA'],[4,'WHI'],[5,'RED'],[5,'YEL'],[5,'GRE'],[5,'BLU'],[5,'BLA'],[5,'WHI'],[6,'RED'],[6,'YEL'],[6,'GRE'],[6,'BLU'],[6,'BLA'],[6,'WHI']];
    $tablero = [[17,8,33,0,26,28],[16,9,1,18,3,34],[19,21,2,10,27,32],[20,35,4,30,11,31],[22,7,6,13,25,12],[23,24,15,14,29,5]];
    */
    
    $combinaciones=array();
    if (!isset($_SESSION['tablero'])) {
        $_SESSION['tablero'] = generarTablero();
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        generarCombinaciones($combinaciones,$numeros,$colores);
        //var_dump($combinaciones);
        dibujarTablero($_SESSION['tablero'], $combinaciones);
        //var_dump($_SESSION['tablero']);
        tiradaValida($filaInicio,$columnaInicio,$filaFin,$columnaFin);
        tiradaPermitida($filaInicio,$columnaInicio,$filaFin,$columnaFin,$combinaciones,$_SESSION['tablero']);
    }
    //FUNCIONES

  
    function generarCombinaciones(array &$combinaciones,array $numeros, array $colores):array{ // & (por referencia): El argumento no se copia. En su lugar, la función trabaja directamente sobre la variable original, permitiendo modificarla.
        for($i=0; $i < count($numeros); $i++){       // bucle en el array numero
            $valor1 = $numeros[$i];                     // añadimos el numero que queremos a una variable para facilitar visualmente el trabajo
            for($j=0; $j < count($colores); $j++){       //bucle en el array colores 
                $valor2 = $colores[$j];
                array_push($combinaciones, [$valor1, $valor2]); // pasa valor de $numero y $colores a el array vacio conbinaciones
            }
        }
        return $combinaciones; //devuelbe el array conbinaciones lleno 
    }
   
    function dibujarTablero(array $tablero,$combinaciones){
        echo "<div class='map'>";
        $combinacion = array();
        foreach($tablero as $filaIndices){
            foreach($filaIndices as $indice){
                $combinacion = $combinaciones[$indice]; // le restamos uno al indice para que no se salga del array
                echo "<span class='map-value'>" . $combinacion[0]. "-".$combinacion[1]." ". "</span>"; // mostramos los dos elementos del array conbinacion que cada vez que hace bucle se maxaca con los nuevos valores
            }
        echo "<br>";
        }
        echo"</div>";
        }
    

    function tiradaValida($filaInicio,$columnaInicio,$filaFin,$columnaFin){

        if($filaInicio === $filaFin || $columnaInicio === $columnaFin){
            echo "<br>TIRADA PERMITIDA";
        }else{
            echo "<br>TIRADA NO PERMITIDA";
        }
        


    }

    function tiradaPermitida($filaInicio,$columnaInicio,$filaFin,$columnaFin,array $combinaciones, array $tablero){
        echo "<br>Indice de ficha : ".$indiceIn = $tablero[$filaInicio-1][$columnaInicio-1];
        echo "<br>Indice donde cae la ficha. ".$indiceFin = $tablero[$filaFin-1][$columnaFin-1];
        echo "<br>Casilla donde esta la ficha. ".$combinaciones[$indiceIn][0]."-". $combinaciones[$indiceIn][1];
        echo "<br>Casilla donde va la ficha. ".$combinaciones[$indiceFin][0]."-". $combinaciones[$indiceFin][1];
        //voy a hacerque ademas de ver los numeros o colores sea el indice diferente para asegurarme de que el movimiento de la ficha existe 
        if ($combinaciones[$indiceIn][0] === $combinaciones[$indiceFin][0] && $indiceIn != $indiceFin || 
        $combinaciones[$indiceIn][1] === $combinaciones[$indiceFin][1] && $indiceIn != $indiceFin){
            echo "<br>Tirada válida. ";
        }else{ 
            echo "<br>Tirada NO válida ";
        } 
    }
        

    function generarTablero():array {
        $numeros = [];
        for ($i = 0; $i < 36; $i++) { 
            $numeros[] = $i;
        }
        shuffle($numeros);// mezcla los numeros del array numeros 
        for($i = 0; $i < 6; $i++){
            for($j = 0; $j < 6 ; $j++){
                $tablero[$i][$j]= array_pop($numeros); // pone el ultimo elemente del arrat numeros en la posicion correspondiente de tablero y despues borra el ultimo numero del array y asi no se puede repetir nada
            }
        }
        return $tablero;
    }


    

?>