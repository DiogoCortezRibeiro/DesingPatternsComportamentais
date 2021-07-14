<?php

    namespace Alura\DesingPattern\impostos;
    use Alura\DesingPattern\Orcamento;

    class Iss extends imposto
    {
        public function realizaCalculoEspecifico(Orcamento $orcamento) : float
        {
            return $orcamento->valor * 0.06;
        }
    }

 ?>