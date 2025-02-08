<!DOCTYPE html>
<html>
<head>
        <title>AP32</title>
</head>
<body>
        <h1>ejercicio 5</h1>

<?php
/* Ejercicio 5.-Una compañía de viajes cuenta con tres tipos de autobuses (A, B y C),
cada uno tiene un precio por kilómetro recorrido por persona, los costes 
respectivos son 2.0€, 2.5€ y 3.0€. Se requiere determinar el coste total y por
persona del viaje considerando que cuando éste se presupuesta debe haber un mínimo
de 20 personas, de lo contrario el cobro se realiza en base a este número mínimo.

*/

$personas = $_GET["personas"];
$tipo = $_GET["tipo"];
$km = $_GET["km"];
$tipoA = 2;
$tipoB = 2.5;
$tipoC = 3;

switch ($tipo){
    case "A":
        if ($personas < 20){
            $cobro =  $tipoA * $km * 20;
        } else {
            $cobro = $tipoA * $km * $personas;
        }
    case "B":
        if ($personas < 20){
            $cobro =  $tipoB * $km * 20 ;
        } else {
            $cobro = $tipoB * $km * $personas;
        }
    case "C":
        if ($personas < 20){
            $cobro = $tipoC * $km * 20;
        } else {
            $cobro =  $tipoC * $km * $personas;
        }
}

echo "el precio para $personas personas, para $km km el total es : $cobro euros";

?>
</body>
</html>