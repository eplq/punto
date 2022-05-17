<?php

namespace ITEC\DAW\EPL\Tests;

use ITEC\DAW\EPL\Poligonos\Circulo;
use ITEC\DAW\EPL\Poligonos\Punto;
use PHPUnit\Framework\TestCase;

class CirculoTest extends TestCase
{
    public function testArea()
    {
        $puntos1 = [new Punto(), new Punto(1, 0)];
        $puntos2 = [new Punto(), new Punto(3, 4)];
        $puntos3 = [new Punto(1, 1), new Punto(0, 0)];

        $circulo1 = new Circulo(...$puntos1);
        $circulo2 = new Circulo(...$puntos2);
        $circulo3 = new Circulo(...$puntos3);

        $this->assertEquals(M_PI, $circulo1->area());
        $this->assertEquals(25 * M_PI, $circulo2->area());
        $this->assertEquals(2 * M_PI, $circulo3->area());
    }
}
