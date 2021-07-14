<?php

    namespace Alura\DesingPattern\impostos;
    use Alura\DesingPattern\Orcamento;

    class Icms extends imposto
    {
        public function realizaCalculoEspecifico(Orcamento $orcamento) : float
        {
            return $orcamento->valor * 0.1;
        }
    }

?>