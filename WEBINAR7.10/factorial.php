<!DOCTYPE html>
<html>
<head>
    <title>webinar 7-10-24</title>
</head>
<body>
    <h1>factorial</h1>

    <?php
     
     $num = $_GET["num"];
     $acum = 1; // utilizamos el parametro para acumular el resultado de las multiplicaciones
    for($i = $num; $i > 1; $i--){
        $acum *= $i;  
    }
    
    echo "el factorial es : " . $acum;
    
    ?>


    
</body>
</html>
