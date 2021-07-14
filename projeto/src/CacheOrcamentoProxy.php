<?php

    namespace Alura\DesingPattern;

    class CacheOrcamentoProxy extends Orcamento
    {
        private float $valorCahce = 0;
        private Orcamento $orcamento;

        public function __construct(Orcamento $orcamento)
        {
            $this->orcamento = $orcamento;
        }
        
        public function addItem(Orcavel $item)
        {
            throw new \DomainException('Não é possivel adicionar um item a orçamento orcavel');
        }

        public function valor() : float
        {
            if($this->valorCahce == 0)
            {
                $this->valorCahce = $this->orcamento->valor();
            }
            return $this->valorCahce;
        }
    }
?>