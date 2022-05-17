<?php

/**
 * Representación de un polígono en un plano 2D.
 *
 * @author Enrique Pavón (1DAW)
 */

namespace ITEC\DAW\EPL\Poligonos;

/**
 * Clase que representa un polígono.
 */
class Poligono
{
    public array $puntos;

    /**
     * Constructor
     *
     * @param array $puntos Puntos que conforman el polígono.
     */
    public function __construct(array $puntos = [])
    {
        $this->puntos = $puntos;
    }

    /**
     * Obtener el área
     *
     * @return int Área
     */
    public function area()
    {
        // excede el ámbito del ejercicio
        // @codeCoverageIgnoreStart
        // https://es.wikipedia.org/wiki/F%C3%B3rmula_del_%C3%A1rea_de_Gauss
        // solo funciona si los puntos están ordenados en sentido horario

        $primerSumatorio = 0;

        for ($i = 0; $i < count($this->puntos) - 1; $i++) {
            $punto = $this->puntos[$i]->getPosition();
            $siguientePunto = $this->puntos[$i + 1]->getPosition();

            $primerSumatorio += $punto["x"] * $siguientePunto["y"];
        }

        $ultimoXporPrimerY = $this->puntos[count($this->puntos) - 1]->getPosition()["x"]
                             * $this->puntos[0]->getPosition()["y"];

        $segundoSumatorio = 0;

        for ($i = 0; $i < count($this->puntos) - 1; $i++) {
            $punto = $this->puntos[$i]->getPosition();
            $siguientePunto = $this->puntos[$i + 1]->getPosition();

            $segundoSumatorio += $punto["y"] * $siguientePunto["x"];
        }

        $ultimoYporPrimerX = $this->puntos[count($this->puntos) - 1]->getPosition()["y"]
                             * $this->puntos[0]->getPosition()["x"];

        $areaFinal = .5 * abs($primerSumatorio + $ultimoXporPrimerY - $segundoSumatorio - $ultimoYporPrimerX);

        return $areaFinal;
        // @codeCoverageIgnoreEnd
    }
}
