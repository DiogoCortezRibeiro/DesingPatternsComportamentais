<?php

    namespace Alura\DesingPattern\Relatorio;
    use Alura\DesingPattern\Relatorio\ArquivoExportado;

    class ArquivoExportadoXml implements ArquivoExportado
    {
        private string $nomeElementoPai;

        public function __construct(string $nomeElementoPai)
        {
            $this->nomeElementoPai = $nomeElementoPai;
        }

        public function salvar(ConteudoExportado $conteudoExportado) : string
        {
            $elmentoXml = new \SimpleXMLElement("<{$this->nomeElementoPai}/>");
            foreach($conteudoExportado->conteudo() as $item => $valor)
            {
                $elmentoXml->addChild($item, $valor);
            }
            $caminhoArquivo = tempnam(sys_get_temp_dir(), 'xml');
            $elmentoXml->asXML($caminhoArquivo);
            return $caminhoArquivo;
        }
    }

?>
