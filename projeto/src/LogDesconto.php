<?php

    namespace Alura\DesingPattern;

    class LogDesconto
    {
        public function informar(float $descontoCalculado)
        {
            // biblioteca de log
            echo "Salvando log de desconto: $descontoCalculado";
        }
    }

?>