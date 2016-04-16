<?php

namespace Apis\Controller;

class Controller
{
    private $parameters = false;
    protected $smarty = false;

    function __construct($parameters = false , \Smarty $smarty_object)
    {
        $this->smarty = $smarty_object;
        $this->parameters = $parameters;
    }

    protected function getUrlParameters()
    {
        return $this->parameters;
    }

    // INSTANCIAR MODEL FACTORY PARA CRIAR O OBJETO MODEL QUE IRÁ ACESSAR O BANCO (CRIA E RETORNA O OBJETO MODEL)

    // TALVEZ SMARTY SOH NA CAMADA VIEW FIQUE LEGAL. FAZER O TESTE DEPOIS
}