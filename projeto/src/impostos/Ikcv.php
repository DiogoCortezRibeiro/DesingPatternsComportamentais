<?php

    namespace Alura\DesingPattern;
    use Alura\DesingPattern\Orcamento;
    use Alura\DesingPattern\impostos\imposto;
    use Alura\DesingPattern\impostos\ImpostoCom2Aliquotas;

    class Ikcv extends ImpostoCom2Aliquotas 
    {
        public function deveAplicarTaaMaxima(Orcamento $orcamento)
        {
            return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
        }

        public function calculaTaxaMaxima(Orcamento $orcamento)
        {
            return $orcamento->valor * 0.04;
        }

        public function calculaTaxaNormal(Orcamento $orcamento)
        {
            return $orcamento->valor * 0.025;
        }
    }

?>