<?php

    namespace Alura\DesingPattern\Estados;
    use Alura\DesingPattern\Orcamento;
    use Alura\DesingPattern\Estados\EstadoOrcamento;

    class Finalizado extends EstadoOrcamento
    {
        public function calculaDescontoExtra(Orcamento $orcamento)
        {
            throw new \DomainException("Um orçamento finalizado não pode receber um desconto");
        }
    }

?>