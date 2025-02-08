<?php
/* Ejercicio 1.- Escribe un programa para imprimir el área y el perímetro de un triángulo creando una clase llamada 'Triangle'.

El triángulo tendrá como propiedades sus 3 lados. Declara las propiedades públicas y accede a ellas directamente.

Utiliza la fórmula de Heron para calcular el área. Esta clase tendrá los lados como propiedades y los siguientes métodos:

    area
    perímetro
*/



class Triangle{
    //propiedades
    public $lado1;
    public $lado2;
    public $lado3;
    public $area;
    public $semiPerimetro;

    //metodos
    public function area(){
            $this->area = sqrt(($this->semiPerimetro*($this->semiPerimetro-$this->lado1))*
            ($this->semiPerimetro-$this->lado2)*
            ($this->semiPerimetro-$this->lado3));
        return $this->area;
    }

    public function perimetro(){
        $this->semiPerimetro = ($this->lado1 + $this->lado2 + $this->lado3)/2;
        return $this->semiPerimetro;
    }

}

//definicion de objetos 

$triangulo1 = new Triangle();
$triangulo1->lado1 = 10;
$triangulo1->lado2 = 12;
$triangulo1->lado3 = 16;

echo "El semiperimetro del triangulo es: " . $triangulo1->perimetro() ."</br>";
echo "El area del triangulo es: " . round($triangulo1->area(),2)."</br>";
