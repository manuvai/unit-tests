<?php

require dirname(__DIR__) . '/src/Calculator.php';

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    /**
     * @var Calculator
     */
    private $calculator;

    public function setUp() {
        $this->calculator = new Calculator();
    }

    public function testAdd() {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testSubstract() {
        $result = $this->calculator->substract(1, 2);
        $this->assertEquals(-1, $result);
    }

    public function testSubstractFails() {
        $result = $this->calculator->substract(1, 2);
        $this->assertEquals(0, $result);
    }
}



