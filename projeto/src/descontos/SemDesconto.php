<?php

    namespace Alura\DesingPattern\descontos;

    use Alura\DesingPattern\Orcamento;

    class SemDesconto extends Desconto
    {
        public function __construct(){
            parent::__construct(null);
        }

        public function calculaDesconto(Orcamento $orcamento)
        {
            return 0;
        }
    }

?>