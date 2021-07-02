<?php
    namespace Alura\DesingPattern\Estados;
    use Alura\DesingPattern\Orcamento;
    use Alura\DesingPattern\Estados\EstadoOrcamento;

    class EmAprovacao extends EstadoOrcamento
    {
        public function calculaDescontoExtra(Orcamento $orcamento)
        {
            return $orcamento->valor * 0.05;
        }

        public function aprovar(Orcamento $orcamento)
        {
            $orcamento->estadoAtual = new Aprovado();
        }

        public function reprovar(Orcamento $orcamento)
        {
            $orcamento->estadoAtual = new Reprovado();
        }
    }
?>