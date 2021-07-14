<?php

use Alura\DesingPattern\Orcamento;
use Alura\DesingPattern\Relatorio\ArquivoExportadoXml;
use Alura\DesingPattern\Relatorio\OrcamentoExportado;

require 'vendor/autoload.php';

    $orcamento = new Orcamento();
    $orcamento->valor = 500;
    $orcamento->quantidadeItens = 5;

    $orcamentoExportado = new OrcamentoExportado($orcamento);
    $orcamentoExportadoEmXml = new ArquivoExportadoXml('orcamento');

    echo $orcamentoExportadoEmXml->salvar($orcamentoExportado);

?>