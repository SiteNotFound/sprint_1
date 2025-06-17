<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../src/numberChecker.php';

class NumberCheckerTest extends TestCase {

    public function testIsEven() {

        $checker = new NumberChecker(4);
        $this->assertTrue($checker->isEven());

        $checker = new NumberChecker(5);
        $this->assertFalse($checker->isEven());
    }

    public function testIsPositive() {
        
        $checker = new NumberChecker(3);
        $this->assertTrue($checker->isPositive());

        $checker = new NumberChecker(-1);
        $this->assertFalse($checker->isPositive());
    }
}

