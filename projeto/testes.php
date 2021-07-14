<?php
    require 'vendor/autoload.php';

    use Alura\DesingPattern\CalculadoraDeDesconto;
    use Alura\DesingPattern\CalculadoraDeImpostos;
    use Alura\DesingPattern\impostos\Icms;
    use Alura\DesingPattern\impostos\Iss;
    use Alura\DesingPattern\Orcamento;

    $orcamento   = new Orcamento();
    $orcamento->valor = 100;
    $calculadora = new CalculadoraDeImpostos();
    echo $calculadora->calcula($orcamento, new Icms());

    /*$calculadoraDesconto = new CalculadoraDeDesconto();
    $orcamento = new Orcamento();
    $orcamento->valor = 600;
    $orcamento->quantidadeItens = 0;
    echo $calculadoraDesconto->calculaDesconto($orcamento);*/

?>