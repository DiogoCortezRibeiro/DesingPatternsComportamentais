<?php

    namespace Alura\DesingPattern\Relatorio;

use Alura\DesingPattern\Pedido;
use Alura\DesingPattern\Relatorio\ConteudoExportado;

    class PedidoExportado implements ConteudoExportado
    {
        private Pedido $pedido;

        public function __construct(Pedido $pedido)
        {
            $this->pedido = $pedido;
        }

        public function conteudo() : array
        {
            return [
                'nome_cliente' => $this->pedido->cliente,
                'data_finalizacao' => $this->pedido->dataFinalizacao
            ];
        }
    }

?>