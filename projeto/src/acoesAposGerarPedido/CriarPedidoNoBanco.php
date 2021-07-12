<?php

    namespace Alura\DesingPattern\acoesAposGerarPedido;
    
    use Alura\DesingPattern\acoesAposGerarPedido\AcaoAposPedido;
    use Alura\DesingPattern\Pedido; 

    class CriarPedidoNoBanco implements AcaoAposPedido
    {
        public function executaAcao(Pedido $pedido)
        {
            echo "Salvando pedido no banco de dados";
        }
    }
?>