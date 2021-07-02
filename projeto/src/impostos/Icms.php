<?php

    namespace Alura\DesingPattern\impostos;
    use Alura\DesingPattern\Orcamento;

    class Icms implements imposto
    {
        public function calculaImposto(Orcamento $orcamento) : float
        {
            return $orcamento->valor * 0.1;
        }
    }

?>