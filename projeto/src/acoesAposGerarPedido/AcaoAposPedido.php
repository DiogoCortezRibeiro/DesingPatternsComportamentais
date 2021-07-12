<?php

    namespace Alura\DesingPattern\acoesAposGerarPedido;
    use Alura\DesingPattern\Pedido; 
    
    interface AcaoAposPedido
    {
        public function executaAcao(Pedido $pedido);
    }
?>