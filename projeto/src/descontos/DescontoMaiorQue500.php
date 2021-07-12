<?php

    namespace Alura\DesingPattern\descontos;

    use Alura\DesingPattern\Orcamento;

    class DescontoMaiorQue500 extends Desconto
    {
        public function calculaDesconto(Orcamento $orcamento)
        {
            if($orcamento->valor > 500)
            {
                return $orcamento->valor * 0.05;
            }
            
            return $this->proximoDesconto->calculaDesconto($orcamento);
        }
    }

?>