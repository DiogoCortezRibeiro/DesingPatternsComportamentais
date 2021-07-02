<?php

    namespace Alura\DesingPattern\impostos;
    use Alura\DesingPattern\Orcamento;

    abstract class ImpostoCom2Aliquotas implements imposto
    {
        public function calculaImposto(Orcamento $orcamento): float
        {
            if($this->deveAplicarTaaMaxima($orcamento))
            {
                return $this->calculaTaxaMaxima($orcamento);
            } 

            return $this->calculaTaxaNormal($orcamento);
        }

        abstract public function deveAplicarTaaMaxima(Orcamento $orcamento);

        abstract public function calculaTaxaMaxima(Orcamento $orcamento);

        abstract public function calculaTaxaNormal(Orcamento $orcamento);

    }

?>