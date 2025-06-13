<?php
abstract class Shape {
    public $anchura;
    public $altura;

    public function __construct($anchura, $altura) {
        $this->anchura = $anchura;
        $this->altura = $altura;
    }
    abstract public function calcularArea();
}
?>