<?php
class Raiz
{
    public $numeros;

    public function __construct(...$numeros)
    {
        $this->numeros = $numeros;
    }

    public function calcularRaizCuadradas()
    {
        $raiz = array_map(function($numero) {
            return sqrt($numero);
        }, $this->numeros);

        return $raiz;
    }
}

$numero1 = 16;

$calculadora = new RaizCuadrada($numero1);
$raiz = $calculadora->calcularRaicesCuadradas();

echo "Las raíces cuadradas de los números son: ";
echo implode(', ', $raices);

?>