<!DOCTYPE html>
<html>
<head>
    <title>AREA TERRENO</title>
</head>
<body>
    <h1>área de un terreno</h1>

    <?php
      $a = 10;
      $b = 16; 
      $c = 35;

        $diferencia = $a - $c;
        $areaGrande = $a * $b;
        $areaPequeña = ($diferencia * $b)/ 2;
        $areaFinal = $areaGrande - $areaPequeña;
        
        echo "El área del terreno es: " . $areaFinal;
    ?>


    
</body>
</html>
