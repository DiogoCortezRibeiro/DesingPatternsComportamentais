<?php

    namespace Alura\DesingPattern\acoesAposGerarPedido;
    use Alura\DesingPattern\Pedido; 
    use Alura\DesingPattern\acoesAposGerarPedido\AcaoAposPedido;

    class LogGerarPedido implements AcaoAposPedido
    {
        public function executaAcao(Pedido $pedido)
        {
            echo "Gerando log de geração de pedido";
        }
    }
?>