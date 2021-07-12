<?php

    namespace Alura\DesingPattern\acoesAposGerarPedido;
    use Alura\DesingPattern\Pedido;
    use Alura\DesingPattern\acoesAposGerarPedido\AcaoAposPedido;

    class EnviarPedidoEmail implements AcaoAposPedido
    {
        public function executaAcao(Pedido $pedido)
        {
            echo "Enviando e-mnail de pedido gerado";
        }
    }

?>