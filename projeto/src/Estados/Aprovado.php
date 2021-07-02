<?php

    namespace Alura\DesingPattern\Estados;
    use Alura\DesingPattern\Orcamento;
    use Alura\DesingPattern\Estados\EstadoOrcamento;

    class Aprovado extends EstadoOrcamento
    {
        public function calculaDescontoExtra(Orcamento $orcamento)
        {
            return $orcamento->valor * 0.02;
        }

        public function finalizar(Orcamento $orcamento)
        {
            $orcamento->estadoAtual = new Finalizado();
        }
    }

?>