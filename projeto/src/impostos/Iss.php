<?php

    namespace Alura\DesingPattern\impostos;
    use Alura\DesingPattern\Orcamento;

    class Iss implements imposto
    {
        public function calculaImposto(Orcamento $orcamento) : float
        {
            return $orcamento->valor * 0.06;
        }
    }

 ?>