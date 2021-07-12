<?php
    namespace Alura\DesingPattern;

    use DateTimeInterface;
    use Alura\DesingPattern\Orcamento;

    class Pedido
    {
        public string $cliente;
        public DateTimeInterface $dataFinalizacao;
        public Orcamento $orcamento;
    }

?>