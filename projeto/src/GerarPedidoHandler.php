<?php

    namespace Alura\DesingPattern;

    use Alura\DesingPattern\acoesAposGerarPedido\AcaoAposPedido;

    class GerarPedidoHandler
    {
        private array $acoesAposGerarPedido = [];

        public function __construct()
        {
            
        }

        public function adicionarAcaoAposPedido(AcaoAposPedido $acao)
        {
            $this->acoesAposGerarPedido[] = $acao;
        }

        public function execute(GerarPedido $gerarPedido)
        {
            $orcamento = new Orcamento();
            $orcamento->quantidadeItens= $gerarPedido->getNumeroItens();
            $orcamento->valor = $gerarPedido->getValorOrcamento();

            $pedido = new Pedido();
            $pedido->dataFinalizacao = new \DateTimeImmutable();
            $pedido->cliente = $gerarPedido->getNomeCliente();
            $pedido->orcamento = $orcamento;

            foreach($this->acoesAposGerarPedido as $acao)
            {
                $acao->executaAcao($pedido);
            }

        }
    }

?>