<?php

namespace ITEC\DAW\EPL\Poligonos;

use ITEC\DAW\EPL\Poligonos\Punto;

/**
 * Representa un triángulo
 */
class Triangulo extends Poligono
{
    /**
     * Constructor
     *
     * @param Punto $puntoA Punto A
     * @param Punto $puntoB Punto B
     * @param Punto $puntoC Punto C
     */
    public function __construct(Punto $puntoA, Punto $puntoB, Punto $puntoC)
    {
        parent::__construct();
        array_push($this->puntos, $puntoA, $puntoB, $puntoC);
    }

    /**
     * Obtener área
     *
     * @return float El área del triángulo
     */
    public function area()
    {
        // si tenemos tres puntos en vez de distancias, siempre se va a dar un triángulo, con
        // un área mínima de 0, lo que está en el dominio de la función raíz cuadrada

        $dAB = $this->puntos[0]->distanceTo($this->puntos[1]);
        $dBC = $this->puntos[1]->distanceTo($this->puntos[2]);
        $dCA = $this->puntos[2]->distanceTo($this->puntos[0]);

        $semiperimetro = ($dAB + $dBC + $dCA) / 2;

        return sqrt($semiperimetro * ($semiperimetro - $dAB) * ($semiperimetro - $dBC) * ($semiperimetro - $dCA));
    }
}
