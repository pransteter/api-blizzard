<?php

namespace Blizzard\Factory;

class ViewFactory
{
    private $view = false;

    function __construct(Array $view_information)
    {
        $this->destinyValidation($view_information);
        $archive = $this->archiveValidation($view_information);

        require_once $archive;

        $class = "\\Blizzard\\View\\Modules\\" . ucfirst($view_information['view']);

        try
        { $view_object = new $class(); }
        catch (\Exception $e) { throw new \Exception('Não foi possível instanciar a view informada. Verifique se os parâmetros "module_name" e "view_name" foram informados adequadamente.'); }

        $this->view = $view_object;
    }

    private function destinyValidation($destiny = null)
    {
        if(!isset($destiny['module']) || empty($destiny['module']) || !is_string($destiny['module']))
        { throw new \Exception('O Módulo não foi corretamente especificado para criação da view. Verifique se está passando corretamente o parâmetro "module_name" como string.'); }

        if(!isset($destiny['view']) || empty($destiny['view']) || !is_string($destiny['view']))
        { throw new \Exception('A View não foi corretamente especificada. Verifique se está passando corretamente o parâmetro "view_name" como string.'); }
    }

    private function archiveValidation($destiny = null)
    {
        $archive_url = (!is_null($destiny)) ?
            VIEW_PATH . 'modules/' . $destiny['module'] . '/' . $destiny['view'] . '.php' : false;

        if(!file_exists($archive_url))
        { throw new \Exception('Não encontramos o arquivo dentro do diretório referente a view. Verifique se o arquivo existe ou se os parâmetros "module_name" e view_name" foram informados adequadamente.'); }

        return $archive_url;
    }

    public function getObject() { return $this->view; }

}