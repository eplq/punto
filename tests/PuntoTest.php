<?php

namespace ITEC\DAW\EPL\Tests;

use ITEC\DAW\EPL\Poligonos\Punto;
use PHPUnit\Framework\TestCase;

class PuntoTest extends TestCase
{
    public function testGetPosition()
    {
        $prueba = new Punto(10, 15);

        $position = $prueba->getPosition();

        $this->assertArrayHasKey("x", $position);
        $this->assertArrayHasKey("y", $position);

        $this->assertEquals(10, $position["x"]);
        $this->assertEquals(15, $position["y"]);

        return $prueba;
    }

    /**
     * @depends testGetPosition
     */
    public function testSetPosition(Punto $punto)
    {
        $punto->setPosition(1, 5);

        $position = $punto->getPosition();

        $this->assertEquals(1, $position["x"]);
        $this->assertEquals(5, $position["y"]);

        return $punto;
    }

    /**
     * @depends testSetPosition
     */
    public function testMove(Punto $punto)
    {
        $punto->move(1, 5);

        $position = $punto->getPosition();

        $this->assertEquals(2, $position["x"]);
        $this->assertEquals(10, $position["y"]);

        return $punto;
    }

    /**
     * @depends testMove
     */
    public function testCopy(Punto $punto)
    {
        $punto2 = new Punto();

        $punto->copy($punto2);
        $position = $punto->getPosition();

        $this->assertEquals(0, $position["x"]);
        $this->assertEquals(0, $position["y"]);
    }

    public function testDistanceTo()
    {
        $punto = new Punto();
        $punto2 = new Punto(3, 4);
        $punto3 = new Punto(10, 0);
        $punto4 = new Punto(0, 10);

        $this->assertEquals(5, $punto->distanceTo($punto2));
        $this->assertEquals(10, $punto->distanceTo($punto3));
        $this->assertEquals(10, $punto->distanceTo($punto4));
    }
}
