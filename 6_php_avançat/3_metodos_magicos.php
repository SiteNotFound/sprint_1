<?php
class Empleado {
    private $nombre;
    private $sueldo;

    public function __construct($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function __clone() {
        echo "El empleado " . $this->nombre . " con el sueldo " . $this->sueldo . "€ ha sido clonado.<br>";
    }
    public function __toString() {
        return "Empleado: " . $this->nombre . ", Sueldo: " . $this->sueldo . "€<br>";
    }

    public function __invoke() {
        return "Invocando al empleado: " . $this->nombre . "<br>";
    }   
}
$empleado1 = new Empleado("Pepito", 4000);
$empleado2 = clone $empleado1;
echo $empleado2;
echo $empleado2();
?>
