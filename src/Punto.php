<?php

/**
 * Representación de un punto en un plano 2D.
 *
 * @author Enrique Pavón (1DAW)
 */

namespace ITEC\DAW\EPL\Poligonos;

/**
 * Clase que representa un punto en el plano.
 */
class Punto
{
    private float $x;
    private float $y;

    /**
     * Constructor
     *
     * @param float $x Coordenada en el eje de abscisas
     * @param float $y Coordenada en el eje de ordenadas
     */
    public function __construct(float $x = 0, float $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Establece una nueva posición
     *
     * @param float $newX Nueva posición en el eje X
     * @param float $newY Nueva posición en el eje Y
     */
    public function setPosition(float $newX, float $newY): void
    {
        $this->x = $newX;
        $this->y = $newY;
    }

    /**
     * Suma un valor a cada uno de los ejes
     *
     * @param float $x Desplazamiento en el eje X
     * @param float $y Desplazamiento en el eje Y
     */
    public function move(float $x, float $y): void
    {
        $this->x += $x;
        $this->y += $y;
    }

    /**
     * Obtiene la posición
     *
     * @return array Array con las coordenadas
     */
    public function getPosition(): array
    {
        return [
            "x" => $this->x,
            "y" => $this->y
        ];
    }

    /**
     * Copia los valores de un punto dado por parámetro
     *
     * @param Punto $punto Punto del que obtener las coordenadas
     */
    public function copy(Punto $punto): void
    {
        $this->setPosition($punto->x, $punto->y);
    }

    /**
     * Distancia a un punto dado por parámetro
     *
     * @param Punto $punto El punto con el que medir la distancia
     *
     * @return float La distancia
     */
    public function distanceTo(Punto $punto): float
    {
        $positionPunto2 = $punto->getPosition();

        return sqrt((($positionPunto2["x"] - $this->x) ** 2) + (($positionPunto2["y"] - $this->y) ** 2));
    }
}
