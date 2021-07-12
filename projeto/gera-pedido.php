<?php
    require 'vendor/autoload.php';

    use Alura\DesingPattern\acoesAposGerarPedido\CriarPedidoNoBanco;
    use Alura\DesingPattern\acoesAposGerarPedido\EnviarPedidoEmail;
    use Alura\DesingPattern\GerarPedido;
    use Alura\DesingPattern\GerarPedidoHandler;

    $valorOrcamento = $argv[1];
    $numeroItens = $argv[2];
    $nomeCliente = $argv[3];

    $geraPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
    $gerarPedidoHandler = new GerarPedidoHandler();
    $gerarPedidoHandler->adicionarAcaoAposPedido(new CriarPedidoNoBanco());
    $gerarPedidoHandler->adicionarAcaoAposPedido(new EnviarPedidoEmail());
    $gerarPedidoHandler->execute($geraPedido);
    
?>