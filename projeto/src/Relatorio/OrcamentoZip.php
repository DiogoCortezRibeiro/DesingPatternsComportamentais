<?php

    namespace Alura\DesingPattern\Relatorio;

use Alura\DesingPattern\Orcamento;

class OrcamentoZip
    {
        public function exportar(Orcamento $orcamento)
        {
            $caminhoArquivo = 'C:\temp' . DIRECTORY_SEPARATOR . 'orcamento.zip';

            $zip = new \ZipArchive();
            $zip->open($caminhoArquivo, \ZipArchive::CREATE);
            $zip->addFromString('orcamento.serial', serialize($orcamento));
            $zip->close();
        }
    }

?>