<?php

namespace ITEC\DAW\EPL\Tests;

use ITEC\DAW\EPL\Poligonos\Cuadrado;
use ITEC\DAW\EPL\Poligonos\Punto;
use PHPUnit\Framework\TestCase;

class CuadradoTest extends TestCase
{
    public function testArea()
    {
        $cuadrado = new Cuadrado(new Punto(), 5);
        $cuadrado2 = new Cuadrado(new Punto(), -3);

        $this->assertEquals(25, $cuadrado->area());
        $this->assertEquals(0, $cuadrado2->area());
    }
}
