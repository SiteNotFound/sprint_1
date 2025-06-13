<h3>Ejercicio 1</h3>
<?php
class Employee {
    public $nombre;
    public $sueldo;

    public function __construct($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function pagarImpuestos() {
        if ($this->sueldo > 6000) {
            echo "El nombre del nuevo empleado es {$this->nombre} y con su sueldo de {$this->sueldo}€ tiene que pagar impuestos.<br>";
        } else {
            echo "El nombre del nuevo empleado es {$this->nombre} y con su sueldo de {$this->sueldo}€ no tiene que pagar impuestos.<br>";
        }
    }    
}
$employee1 = new Employee("Cristina", 6500);
$employee1->pagarImpuestos();
$employee2 = new Employee("Fulanito", 500);
$employee2->pagarImpuestos();
?>

<h3>Ejercicio 2</h3>
<?php
abstract class Shape {
    public $anchura;
    public $altura;

    public function __construct($anchura, $altura) {
        $this->anchura = $anchura;
        $this->altura = $altura;
    }
    abstract public function calcularArea();
    
    public function mostrarArea() {
        echo "El área es: " . $this->calcularArea() . "<br>";
    }
}
class Rectangle extends Shape {
    public function calcularArea() {
        return $this->anchura * $this->altura;
    }

    /*
    public function mostrarArea() {
        echo "El área del rectángulo es: " . $this->calcularArea() . "<br>";
    }
    */
}
class Triangle extends Shape {
    public function calcularArea() {
        return ($this->anchura * $this->altura) / 2;
    }

    /*
    public function mostrarArea() {
        echo "El área del triángulo es: " . $this->calcularArea() . "<br>";
    }
    */
}
$miRectangulo = new Rectangle(25, 50);
$miRectangulo->mostrarArea();
$miTriangulo = new Triangle(30, 10);
$miTriangulo->mostrarArea();
?>           