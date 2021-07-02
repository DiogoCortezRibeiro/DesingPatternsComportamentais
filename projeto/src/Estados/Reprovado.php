<?php

    namespace Alura\DesingPattern\Estados;
    use Alura\DesingPattern\Orcamento;
    use Alura\DesingPattern\Estados\EstadoOrcamento;
    use Alura\DesingPattern\Estados\Finalizado;

    class Reprovado extends EstadoOrcamento
    {
        public function calculaDescontoExtra(Orcamento $orcamento)
        {
            throw new \DomainException("Um orçamento reprovado não pode receber um desconto");
        }

        public function finalizar(Orcamento $orcamento)
        {
            $orcamento->estadoAtual = new Finalizado();
        }
    }

?>