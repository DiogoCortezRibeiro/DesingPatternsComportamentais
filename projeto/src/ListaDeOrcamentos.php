<?php
    namespace Alura\DesingPattern;

    class ListaDeOrcamentos implements \IteratorAggregate
    {
        /** @var Orcamento[] */
        private array $orcamentos = [];

        public function addOrcamento(Orcamento $orcamento)
        {
            $this->orcamentos[] = $orcamento;
        }

        public function getIterator()
        {
            return new \ArrayIterator($this->orcamentos);
        }
    }
?>
