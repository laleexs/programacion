<!DOCTYPE html>
<html>
<head>
    <title>AREA FIGURA</title>
</head>
<body>
    <h1>área de una figura</h1>

    <?php
      $radio = 10;
      $lado = 16; // par esta actividad hemos hecho como que es un triangulo equilatero, como que tenemos el lado 
      $PI = 3.1416;    // la funcion pi() es una función integrada en php que devuelve el valor pi
   

        $areaMedioCirculo = pi() * pow($radio, 2); // pow eleva el valor de radio al cuadrado
        $areaTriangulo = (sqrt(3)/4)* $lado**2; //sqrt funcion para la raiz cuadrada
        $areaFigura = $areaMedioCirculo + $areaTriangulo;
        
        echo "El área de la figura es: " . number_format($areaFigura, 2);
      /*El primer argumento es el número que deseas formatear.
        El segundo argumento es la cantidad de decimales que quieres
        mostrar. En este caso, 2*/


?>


    
</body>
</html>
