<?php
    namespace Alura\DesingPattern;

    use Alura\DesingPattern\Estados\EmAprovacao;
    use Alura\DesingPattern\Estados\EstadoOrcamento;

    class Orcamento
    {
        public float $valor;
        public int $quantidadeItens;
        public EstadoOrcamento $estadoAtual;

        public function __construct()
        {
            $this->estadoAtual = new EmAprovacao();
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
    }
?>