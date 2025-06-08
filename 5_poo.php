<?php
abstract class Animal {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    abstract public function makeSound();
}

class Perro extends Animal {    
    public function makeSound() {
        echo "Bup, bup!<br>";
    }
}

class Gato extends Animal {
    public function makeSound() {
        echo "Meu!<br>";
    }
}

$miPerro = new Perro("Cora");
$miPerro->makeSound();
$miGato = new Gato("Mixi");
$miGato->makeSound();
?>




