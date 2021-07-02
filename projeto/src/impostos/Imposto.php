<?php

    namespace Alura\DesingPattern\impostos;
    use Alura\DesingPattern\Orcamento;

    interface imposto
    {
        public function calculaImposto(Orcamento $orcamento) : float;
    }

?>