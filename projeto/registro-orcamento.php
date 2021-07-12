<?php

    use Alura\DesingPattern\Http\CurlHttpAdapter;
    use Alura\DesingPattern\Orcamento;
    use Alura\DesingPattern\RegistroOrcamento;

    require 'vendor/autoload.php';

    $registroOrcamento = new RegistroOrcamento(new CurlHttpAdapter());
    $registroOrcamento->registrar(new Orcamento());

?>