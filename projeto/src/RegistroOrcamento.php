<?php

    namespace Alura\DesingPattern;

use Alura\DesingPattern\Estados\Finalizado;
use Alura\DesingPattern\Http\HttpAdapter;
use Alura\DesingPattern\Orcamento;

    class RegistroOrcamento
    {
        private HttpAdapter $http;

        public function __construct(HttpAdapter $http)
        {
            $this->http = $http;
        }

        public function registrar(Orcamento $orcamento)
        {
            // chamar uma api de registro
            // enviar os dados do orçamento
            // file_get_contents('http://api.registrar.orcamento');

            if($orcamento->estadoAtual instanceof Finalizado)
            {
                $this->http->post('http://api.registrar.orcamento', [
                    'valor' => $orcamento->valor,
                    'quantidadeItens' => $orcamento->quantidadeItens,
                ]);
            }
            
            throw new \DomainException('Apenas orçamentos finalizados podem ser inseridos na API');
        }
    }

?>