<?php

    use Alura\DesingPattern\Orcamento;
    use Alura\DesingPattern\Relatorio\OrcamentoZip;

    require 'vendor/autoload.php';

    $orcamentoZip = new OrcamentoZip();
    $orcamento = new Orcamento();

    $orcamento->valor = 200;
    $orcamento->quantidadeItens = 7;

    $orcamentoZip->exportar($orcamento);

?>