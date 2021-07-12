<?php

    namespace Alura\DesingPattern\Http;

    interface HttpAdapter
    {
        public function post(string $url, array $data = []);
    }

?>