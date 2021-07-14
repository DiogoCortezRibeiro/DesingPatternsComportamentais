<?php

    namespace Alura\DesingPattern\Relatorio;

use Alura\DesingPattern\Orcamento;

class OrcamentoEmXml
    {
        public function exportar(Orcamento $orcamento)
        {
            $elemento = new \SimpleXMLElement('<orcamento/>');
            $elemento->addChild('valor', $orcamento->valor);
            $elemento->addChild('quantidade_itens', $orcamento->quantidadeItens);
            return $elemento->asXML();
        }
    }

?>