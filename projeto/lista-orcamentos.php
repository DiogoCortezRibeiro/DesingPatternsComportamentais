<?php
    require 'vendor/autoload.php';

use Alura\DesingPattern\ListaDeOrcamentos;
use Alura\DesingPattern\Orcamento;

    $listaOrcamentos = [];
    $orcamento1 = new Orcamento();
    $orcamento1->quantidadeItens = 7;
    $orcamento1->aprovar();
    $orcamento1->valor = 1500;

    $orcamento2 = new Orcamento();
    $orcamento2->quantidadeItens = 3;
    $orcamento2->reprovar();
    $orcamento2->valor = 500;

    $orcamento3 = new Orcamento();
    $orcamento3->quantidadeItens = 5;
    $orcamento3->valor = 1350;
    $orcamento3->aprovar();
    $orcamento3->finalizar();

    $listaOrcamentos = new ListaDeOrcamentos();
    $listaOrcamentos->addOrcamento($orcamento1);
    $listaOrcamentos->addOrcamento($orcamento2);
    $listaOrcamentos->addOrcamento($orcamento3);

    foreach($listaOrcamentos as $orcamento)
    {
        echo "     Valor: $orcamento->valor" . PHP_EOL;
        echo "Quantidade: $orcamento->quantidadeItens" . PHP_EOL;
        echo "    Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL; 
        echo PHP_EOL;
    }


?>  