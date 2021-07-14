<?php
    namespace Alura\DesingPattern;

use Alura\DesingPattern\descontos\DescontoMaiorQue500;
use Alura\DesingPattern\descontos\DescontoMaisDe5Itens;
use Alura\DesingPattern\descontos\SemDesconto;

class CalculadoraDeDesconto
    {
        public function calculaDesconto(Orcamento $orcamento)
        {
            $cadeiaDeDescontos = new DescontoMaisDe5Itens(new DescontoMaiorQue500(new SemDesconto()));
            $descontoCalculado = $cadeiaDeDescontos->calculaDesconto($orcamento);
            
            $logDesconto = new LogDesconto();
            $logDesconto->informar($descontoCalculado);

            return $descontoCalculado;
        }
    }

?>