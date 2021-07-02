<?php
    namespace Alura\DesingPattern;
    use Alura\DesingPattern\impostos\imposto;

    class CalculadoraDeImpostos
    {
        public function calcula(Orcamento $orcamento, Imposto $imposto) : float
        {
            return $imposto->calculaImposto($orcamento);
        }
    }
?>