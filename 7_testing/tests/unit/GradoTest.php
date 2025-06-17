<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../src/grado.php';

class GradoTest extends TestCase {

    public function testGrado() {
        
        $this->assertEquals("Primera División", grado(75));
        $this->assertEquals("Segunda División", grado(50));
        $this->assertEquals("Tercera División", grado(40));
        $this->assertEquals("Reprobado", grado(20));
        $this->assertEquals("Nota no válida", grado(-5));
    }
}

?>
