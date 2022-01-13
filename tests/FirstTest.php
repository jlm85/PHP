<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;


class FirstTest extends TestCase
{
    public function testSum()
    {
        $c = new Calculator();
        $this->assertEquals(5,$c->sum(3,2));
    }

    public function testMultiplicacion()
    {
        $c = new Calculator();
        $this->assertEquals(6,$c->multiplicacion(3,2));
    }
}