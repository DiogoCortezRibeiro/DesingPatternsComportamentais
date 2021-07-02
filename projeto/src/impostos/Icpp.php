<?php

    namespace Alura\DesingPattern\impostos;
    use Alura\DesingPattern\Orcamento;

    class Icpp extends ImpostoCom2Aliquotas
    {
        public function deveAplicarTaaMaxima(Orcamento $orcamento)
        {
            return $orcamento->valor > 500;
        }

        public function calculaTaxaMaxima(Orcamento $orcamento)
        {
            return $orcamento->valor * 0.03;
        }

        public function calculaTaxaNormal(Orcamento $orcamento)
        {
            return $orcamento->valor * 0.002;
        }
    }

?>