<?php
    require 'vendor/autoload.php';
    use Alura\DesingPattern\Orcamento;
    use Alura\DesingPattern\Pedido;

    $valorOrcamento = $argv[1];
    $numeroItens = $argv[2];
    $noemCliente = $argv[3];

    $orcamento = new Orcamento();
    $orcamento->quantidadeItens= $numeroItens;
    $orcamento->valor = $valorOrcamento;

    $pedido = new Pedido();
    $pedido->dataFinalizacao = new \DateTimeImmutable();
    $pedido->cliente = $noemCliente;
    $pedido->orcamento = $orcamento;

    echo "Cria pedido no banco de dados " . PHP_EOL;

    ECHO "Envia e-mail para o cliente " . PHP_EOL;
?>