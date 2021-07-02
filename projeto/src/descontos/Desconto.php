<?php

    namespace Alura\DesingPattern\descontos;

    use Alura\DesingPattern\Orcamento;

abstract class Desconto 
    {
        protected ?Desconto $proximoDesconto;

        public function __construct(?Desconto $proximoDesconto)
        {   
            $this->proximoDesconto = $proximoDesconto;
        }   

        abstract public function calculaDesconto(Orcamento $orcamento);
    }

?>