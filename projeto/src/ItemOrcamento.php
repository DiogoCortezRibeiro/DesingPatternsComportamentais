<?php

    namespace Alura\DesingPattern;

    class ItemOrcamento implements Orcavel
    {
        public float $valor; 

        public function valor() : float
        {
            return $this->valor;
        }
    }

?>