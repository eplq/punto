<?php

namespace ITEC\DAW\EPL\Poligonos;

use ITEC\DAW\EPL\Poligonos\Punto;

/**
 * Representa un rectángulo
 */
class Rectangulo extends Poligono
{
    /**
     * Constructor
     *
     * @param Punto $esquinaInferiorIzquierda Esquina inferior izquierda
     * @param Punto $esquinaSuperiorDerecha Esquina superior derecha
     */
    public function __construct(Punto $esquinaInferiorIzquierda, Punto $esquinaSuperiorDerecha)
    {
        parent::__construct();
        array_push($this->puntos, $esquinaInferiorIzquierda, $esquinaSuperiorDerecha);
    }

    /**
     * Obtiene el área del rectángulo
     *
     * @return float Área del rectánculo
     */
    public function area()
    {
        $posicionEII = $this->puntos[0]->getPosition();
        $posicionESD = $this->puntos[1]->getPosition();

        return abs(($posicionESD["x"] - $posicionEII["x"]) * ($posicionESD["y"] - $posicionEII["y"]));
    }
}
