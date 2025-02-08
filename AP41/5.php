<!DOCTYPE html>
<html>
    <head>
        <tittle>AP41</tittle>
    </head>
    <body>
        <h1>Ejercicio 5</h1>
    

        <?php
        /* EJERCICIO 5. Desarrolla un programa que genere 10 fechas válidas (al azar) del actual año con el siguiente formato:

            Fecha 1: 23 de Marzo de 2018
            Fecha 2: 15 de Enero de 2018
            …
            Fecha 10: 23 de Diciembre de 2018

            Una fecha será válida si el día indicado es correcto para el mes generado (por ejemplo, el “30 de Febrero” no es una
             fecha correcta), el mes está entre “Enero” y “Diciembre”, y el año es el 2018.

            Piensa la lógica de programación más sencilla que se te ocurra para resolver el problema. En tu programa debes utilizar al menos el siguiente array:

            $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
         */
        $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
        $diasMes = [
            'Enero' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
            'Febrero' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29],
            'Marzo' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
            'Abril' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30],
            'Mayo' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
            'Junio' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30],
            'Julio' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
            'Agosto' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
            'Septiembre' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30],
            'Octubre' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
            'Noviembre' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30],
            'Diciembre' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31]
        ];


        $i = 1;
        while ($i <= 10){
            $electionMonth = random_int(1,count($meses)-1); // elige el mes con el numero
            $month = $meses[$electionMonth]; // con el numero del mes entra en el array y recoje el valor de ese mes 
            $electionDay = random_int(1,count($diasMes[$month])); // dentro del mes que queremos elegimos que el numero este entre la longitud de los elementos del array
            Echo "Fecha $i: $electionDay de $meses[$electionMonth] de 2024.<br><br>";

        $i ++;
        }
        ?>
    </body>
</html>