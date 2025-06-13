<?php
require_once 'shape.php';
require_once 'rectangulo.php';
require_once 'triangulo.php';

$miRectangulo = new Rectangulo(40, 20);
echo "El área de mi rectángulo es: ". $miRectangulo->calcularArea() . "<br>";
$miTriangulo = new Triangulo(30, 10);
echo "El área de mi triángulo es: ". $miTriangulo->calcularArea() . "<br>";
?>

