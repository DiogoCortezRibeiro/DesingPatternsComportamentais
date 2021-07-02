<?php

    namespace Alura\DesingPattern;

    class GerarPedido
    {
        private float $valorOrcamento;
        private int $numeroItens;
        private string $nomeCliente;

        public function __construct(float $valorOrcamento, int $numeroItens, string $nomeCliente)
        {
            $this->valorOrcamento = $valorOrcamento;
            $this->numeroItens    = $numeroItens;
            $this->nomeCliente    = $nomeCliente;
        }

        public function getNomeCliente()
        {
            return $this->nomeCliente;
        }

        public function getNumeroItens()
        {
            return $this->numeroItens;
        }

        public function getValorOrcamento()
        {
            return $this->valorOrcamento;
        }
    }

?>