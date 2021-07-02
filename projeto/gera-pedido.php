<?php
    require 'vendor/autoload.php';

    use Alura\DesingPattern\GerarPedido;
    use Alura\DesingPattern\GerarPedidoHandler;

    $valorOrcamento = $argv[1];
    $numeroItens = $argv[2];
    $nomeCliente = $argv[3];

    $geraPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
    $gerarPedidoHandler = new GerarPedidoHandler();
    $gerarPedidoHandler->execute($geraPedido);
?>