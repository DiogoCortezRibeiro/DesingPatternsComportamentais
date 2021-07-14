<?php

    namespace Alura\DesingPattern\Relatorio;

use Alura\DesingPattern\Orcamento;
use Alura\DesingPattern\Relatorio\ConteudoExportado;

    class OrcamentoExportado implements ConteudoExportado
    {
        private Orcamento $orcamento;

        public function __construct(Orcamento $orcamento)
        {
            $this->orcamento = $orcamento;
        }

        public function conteudo() : array
        {
            return [
                'valor' => $this->orcamento->valor,
                'quantidade_itens' => $this->orcamento->quantidadeItens
            ];
        } 
    }

?>