<?php
/*Ejercicio 3.- Crea una clase Artículo que tendrá como propiedades nombre, material y precio.
Como métodos tendrá sus getters y setters correspondientes, y además un método descuento el cual 
modificará el precio del artículo descontándole el porcentaje que le pasamos por parámetro al método 
del precio inicial. No hagas constructor.
*/

class Articulo{
    private $nombre;
    private $material;
    private $precio;

    
// getters 
    public function getNombre(){
        return $this->nombre;
    }

    public function getMaterial(){
        return $this->material;
    }

    public function getPrecio(){
        return $this->precio;
    }

//setters
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setMaterial($material){
        $this->material = $material;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }

    public function discount($descuento){
        $porcentaje = $descuento/100;
        $descuento = 1-$porcentaje;
        $this->precio = $this->precio * $descuento;
        return $this->precio;
    }
}
//metiendo el articulo nuevo y sus atributos
$objeto1 = new Articulo();
$objeto1->setNombre("balon");
$objeto1->setMaterial("fibras");
$objeto1->setPrecio(100);
//pidiendo salidas de datos con get
echo $objeto1->getNombre()."</br>";
echo $objeto1->getMaterial()."</br>";
echo $objeto1->getPrecio()."</br>";
echo $objeto1->discount(10);