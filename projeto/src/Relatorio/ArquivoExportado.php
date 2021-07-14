<?php

    namespace Alura\DesingPattern\Relatorio;

    interface ArquivoExportado
    {
        public function salvar(ConteudoExportado $conteudoExportado): string;
    }

?>