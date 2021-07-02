<?php

    namespace Alura\DesingPattern\descontos;

use Alura\DesingPattern\Orcamento;

class DescontoMaisDe5Itens extends Desconto
    {
        public function calculaDesconto(Orcamento $orcamento)
        {
            if($orcamento->quantidadeItens > 5)
            {
                return $orcamento->valor * 0.1;
            }
            
            return $this->proximoDesconto->calculaDesconto($orcamento);
        }
    }

?>