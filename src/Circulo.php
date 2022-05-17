<?php

namespace ITEC\DAW\EPL\Poligonos;

use ITEC\DAW\EPL\Poligonos\Punto;

/**
 * Modela un círculo.
 */
class Circulo extends Poligono
{
    /**
     * Constructor
     *
     * @param Punto $centro Centro del círculo
     * @param Punto $puntoCircunferencia Punto que está en la circunferencia
     */
    public function __construct(Punto $centro, Punto $puntoCircunferencia)
    {
        parent::__construct();
        array_push($this->puntos, $centro, $puntoCircunferencia);
    }

    /**
     * Obtiene el área del círculo
     *
     * @return int Área del círculo
     */
    public function area()
    {
        $radio = ($this->puntos[0])->distanceTo($this->puntos[1]);

        return M_PI * $radio * $radio;
    }
}
