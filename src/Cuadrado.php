<?php

namespace ITEC\DAW\EPL\Poligonos;

/**
 * Representa un cuadrado
 */
class Cuadrado extends Poligono
{
    /** Longitud del lado */
    private int $longitudLado;

    /**
     * Constructor
     *
     * @param Punto $esquinaInferiorIzquierda Esquina inferior izquierda del cuadrado
     * @param int $longitudLado Longitud del lado. Inferior a 0 será 0
     */
    public function __construct(Punto $esquinaInferiorIzquierda, int $longitudLado)
    {
        parent::__construct();
        array_push($this->puntos, $esquinaInferiorIzquierda);

        if ($longitudLado < 0) {
            $this->longitudLado = 0;
        } else {
            $this->longitudLado = $longitudLado;
        }
    }

    /**
     * Devuelve el área del cuadrado
     *
     * @return int Área
     */
    public function area()
    {
        return $this->longitudLado * $this->longitudLado;
    }
}
