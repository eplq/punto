<?php

namespace ITEC\DAW\EPL\Tests;

use ITEC\DAW\EPL\Poligonos\Punto;
use ITEC\DAW\EPL\Poligonos\Rectangulo;
use PHPUnit\Framework\TestCase;

class RectanguloTest extends TestCase
{
    public function testArea()
    {
        $puntos = [new Punto(), new Punto(2, 2)];
        $puntos2 = [new Punto(3, 3), new Punto(2, 2)];
        $puntos3 = [new Punto(1, 0), new Punto(2, 2)];

        $this->assertEquals(4, (new Rectangulo(...$puntos))->area());
        $this->assertEquals(1, (new Rectangulo(...$puntos2))->area());
        $this->assertEquals(2, (new Rectangulo(...$puntos3))->area());
    }
}
