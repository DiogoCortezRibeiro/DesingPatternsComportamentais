<?php

    namespace Alura\DesingPattern\impostos;
    use Alura\DesingPattern\Orcamento;

    abstract class imposto
    {
        private ?imposto $outroImposto;

        public function __construct(imposto $outroImposto = null)
        {
            $this->outroImposto = $outroImposto;  
        }
        abstract protected function realizaCalculoEspecifico(Orcamento $orcamento) : float;

        public function calculaImposto(Orcamento $orcamento)
        {
            return $this->realizaCalculoEspecifico($orcamento) + $this->outroImposto->realizaCalculoDeOutroImposto($orcamento); // calculo de outro imposto
        }

        public function realizaCalculoDeOutroImposto(Orcamento $orcamento)
        {
            return $this->outroImposto == null ? 0 : $this->outroImposto->calculaImposto($orcamento);
        }
    }

?>