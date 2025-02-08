<!DOCTYPE html>
<html>
    <head>
        <tittle>AP51 </tittle>
    </head>
    <body>
        <h1>Ejercicio 4</h1>
     
        </form>
        <?php
        /*
        EJERCICIO 4.- A un trabajador le pagan según sus horas trabajadas semanalmente y según una tarifa fija determinada por hora. 
        Si la cantidad de horas trabajadas semanalmente es mayor a 40 horas, la tarifa por hora se incrementa en un 25% (ya que, a partir 
        de las 40 horas se consideran como horas extras).

        Diseña un programa en PHP que calcule el salario de trabajadores de una empresa. Los datos de entrada para calcular el salario serán, 
        el nombre de la persona, las horas trabajadas semanales y la tarifa de una hora. 

        Como datos de salida, el programa visualizará el nombre y el importe total cobrado durante esa semana. El programa calculará salarios 
        de todos los empleados.

        Obligatoriamente, debes utilizar una función calculaSalario, que reciba las horas trabajadas semanalmente y la tarifa por hora 
        establecida, y devuelva el importe total del salario. Deberás establecer el valor por defecto de la tarifa a 10€.

            array:

            $empleados = [
            'Juan'=>[
                'horas' => 40,
                'tarifa' => 15
            ],
            'Perico'=>[
                'horas' => 20,
                'tarifa' => 25
            ],
            'Andrés'=>[
                'horas' => 45
            ],
            ];
        */
        
        
        $empleados = [
            'Juan'=>[
                'horas' => 40,
                'tarifa' => 15
            ],
            'Perico'=>[
                'horas' => 20,
                'tarifa' => 25
            ],
            'Andrés'=>[
                'horas' => 45
            ],
        ];
        $tarifa = 10;
        
        //DEFINICION DE FUNCIONES
        function calculaSalario($nombre, $horas, &$tarifa){
            //accedemos a la varable global $empleados
            global $empleados;
            $tarifaEmpleado = $empleados[$nombre]['tarifa'] ?? $tarifa;
            if  ($horas < $empleados[$nombre]['horas']) {
                $importe = $tarifaEmpleado * $horas;
            } else {
                $extras = abs($empleados[$nombre]['horas'] - $horas);
                $importe = ($tarifaEmpleado * $empleados[$nombre]['horas']) + ($extras * ($tarifaEmpleado *0.25));
            }
            echo "El salario de ". $nombre . " es " . $importe ."<br><br>";
        }
        
        //llamando a la funcion 
        calculaSalario("Perico",30, $tarifa);
        calculaSalario("Andrés",30, $tarifa);
        
        ?>
    </body>
</html>