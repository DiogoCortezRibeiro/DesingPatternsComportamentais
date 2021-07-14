<?php

use Alura\DesingPattern\CacheOrcamentoProxy;
use Alura\DesingPattern\ItemOrcamento;
use Alura\DesingPattern\Orcamento;

require 'vendor/autoload.php';

    $orcamento = new Orcamento();
    $item1 = new ItemOrcamento();
    $item1->valor = 300;
    $item2 = new ItemOrcamento();
    $item2->valor = 600;

    $orcamento->addItem($item1);
    $orcamento->addItem($item2);

    $orcamentoAntigo = new Orcamento();
    $item3 = new ItemOrcamento();
    $item3->valor = 400;
    $orcamentoAntigo->addItem($item3);

    $orcamento->addItem($orcamentoAntigo);

    $proxyCache = new CacheOrcamentoProxy($orcamento);

    echo $proxyCache->valor() . PHP_EOL;
    echo $proxyCache->valor() . PHP_EOL;

?>