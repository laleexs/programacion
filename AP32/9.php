<!DOCTYPE html>
<html>
<head>
    <title>AP32</title>
</head>
<body>
    <h1>Ejercicio 9</h1>
    <?php 

    /* Ejercicio 9.- Realiza un algoritmo para generar N elementos de la sucesión 
    de Fibonacci (0, 1, 1, 2, 3, 5, 8, 13,...). El planteamiento del algoritmo correspondiente
     se hace a partir del análisis de la sucesión, en la que se puede observar que un tercer valor
      de la serie está dado por la suma de los dos valores previos, de aquí que se asignan 
      los dos valores para sumar (0, 1), que dan la base para obtener el siguiente elemento que se busca.
    */ 

    $NumeroElementos = $_GET["numero"];
    $valor1 = 0;
    $valor2 = 1;
  

    $contador = 1;
    while($contador < $NumeroElementos){
        $suma = $valor1 + $valor2; 
        $valor1 = $valor2;  // el nuevo valor uno es el antiguo valor2
        $valor2 = $suma;    // el nuevo valor dos es la suma de los anteriores
        

        echo $suma . "<br>" ;
        $contador ++;
    }
    ?>
</body>
</html>