<?php

namespace ITEC\DAW\EPL\Tests;

use ITEC\DAW\EPL\Poligonos\Punto;
use ITEC\DAW\EPL\Poligonos\Triangulo;
use PHPUnit\Framework\TestCase;

class TrianguloTest extends TestCase
{
    public function testArea()
    {
        $puntos = [new Punto(0, 0), new Punto(10, 0), new Punto(5, 0)];
        $puntos2 = [new Punto(0, 0), new Punto(0, 0), new Punto(0, 0)];
        $puntos3 = [new Punto(0, 0), new Punto(1, 2), new Punto(2, 0)];
        $puntos4 = [new Punto(0, 0), new Punto(0, -2), new Punto(2, -1)];

        $this->assertEquals(0, (new Triangulo(...$puntos))->area());
        $this->assertEquals(0, (new Triangulo(...$puntos2))->area());
        $this->assertEquals(2, (new Triangulo(...$puntos3))->area());
        $this->assertEquals(2, (new Triangulo(...$puntos4))->area());
    }
}
