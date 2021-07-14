<?php
    namespace Alura\DesingPattern\impostos;

use Alura\DesingPattern\Orcamento;

class IcmsComIss implements imposto
    {
        public function calculaImposto(Orcamento $orcamento): float
        {
            return (new Icms())->calculaImposto($orcamento) + (new Iss())->calculaImposto($orcamento);
        }
    }
?>