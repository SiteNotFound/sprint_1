<?php
class Perro {    
    public function makeSound() {
        echo "Bup, bup! " . __METHOD__ . "<br>";
    }
    public function miClase() {
        return __CLASS__ . " es la clase a la que pertenece.<br>";
    }
}

$miPerro = new Perro();
$miPerro->makeSound();
echo $miPerro->miClase();
?>