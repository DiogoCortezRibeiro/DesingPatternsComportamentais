<?php
    namespace Alura\DesingPattern;

    use Alura\DesingPattern\Estados\EmAprovacao;
    use Alura\DesingPattern\Estados\EstadoOrcamento;

    class Orcamento implements Orcavel
    {
        private array $itens;
        public EstadoOrcamento $estadoAtual;

        public function __construct()
        {
            $this->estadoAtual = new EmAprovacao();
            $this->itens = [];
        }   

        public function aplicaDesconExtra()
        {
            $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
        }

        public function aprovar()
        {
            $this->estadoAtual->aprovar($this);
        }

        public function reprovar()
        {
            $this->estadoAtual->reprovar($this);
        }

        public function finalizar()
        {
            $this->estadoAtual->finalizar($this);
        }

        public function addItem(Orcavel $item)
        {
            $this->itens[] = $item;
        }

        public function valor() : float
        {
            return array_reduce($this->itens, function($valorAcumulado, Orcavel $item) {
                return $item->valor() + $valorAcumulado;
            } , 0);

            /*$soma = 0;

            foreach($this->itens as $item)
            {
                $soma += $item->valor;
            }

            return $soma;*/
        }
    }
?>