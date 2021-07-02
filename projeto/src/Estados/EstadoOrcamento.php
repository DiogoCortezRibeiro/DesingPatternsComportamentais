<?php

    namespace Alura\DesingPattern\Estados;
    use Alura\DesingPattern\Orcamento;

    abstract class EstadoOrcamento
    {
        abstract public function calculaDescontoExtra(Orcamento $orcamento);

        public function aprovar(Orcamento $orcamento)
        {
            throw new \DomainException("Este orçamento não pode ser aprovado");
        }

        public function reprovar(Orcamento $orcamento)
        {
            throw new \DomainException("Este orçamento não pode ser reprovado");
        }

        public function finalizar(Orcamento $orcamento)
        {
            throw new \DomainException("Este orçamento não pode ser finalizado");
        }
    }
?>