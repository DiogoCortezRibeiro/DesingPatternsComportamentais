<?php

use Alura\DesingPattern\DadosExtrinsecos;
use Alura\DesingPattern\Orcamento;
use Alura\DesingPattern\Pedido;

require 'vendor/autoload.php';

$pedidos = [];
$dados = new DadosExtrinsecos();
$dados->dataFinalizacao = new \DateTimeImmutable();
$dados->cliente = md5((string) rand(1, 10000));

for($i = 0; $i < 10000; $i++)
{
    $pedido = new Pedido();
    $pedido->dados = $dados;
    $pedido->orcamento = new Orcamento();
    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();

?>