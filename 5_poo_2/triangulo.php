<?php
class Triangulo extends Shape {
    public function calcularArea() {
        return $this->anchura * $this->altura / 2;
    }
}
?>