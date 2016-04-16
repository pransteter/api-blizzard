<?php

namespace Blizzard\Factory;

class ControllerFactory
{
    function __construct($loader_information)
    {
        $this->destinyValidation($loader_information['destiny']);
        $archive = $this->archiveValidation($loader_information['destiny']);

        require_once $archive;

        $class = "\\Blizzard\\Controller\\Modules\\" . ucfirst($loader_information['destiny']['controller']);
        $action = $loader_information['destiny']['action'] . 'Action';

        try
        {
            $controller_object = new $class($loader_information['url_parameters']);
            $controller_object->$action();
        }
        catch (\Exception $e) { throw new \Exception('Não foi possível instanciar o controller informado. Verifique o nome da classe do controller.'); }
    }

    private function destinyValidation($destiny = null)
    {
        if(!isset($destiny['module']) || empty($destiny['module']) || !is_string($destiny['module']))
        { throw new \Exception('O Módulo da rota não foi corretamente especificado. Verifique sua especificação no arquivo "/routes.php"'); }

        if(!isset($destiny['controller']) || empty($destiny['controller']) || !is_string($destiny['controller']))
        { throw new \Exception('O Controller da rota não foi corretamente especificado. Verifique sua especificação no arquivo "/routes.php"'); }

        if(!isset($destiny['action']) || empty($destiny['action']) || !is_string($destiny['action']))
        { throw new \Exception('A Action da rota não foi corretamente especificada. Verifique sua especificação no arquivo "/routes.php"'); }
    }

    private function archiveValidation($destiny = null)
    {
        $archive_url = (!is_null($destiny)) ?
            CONTROLLER_PATH . 'modules/' . $destiny['module'] . '/' . $destiny['controller'] . '.php' : false;

        if(!file_exists($archive_url))
        { throw new \Exception('Não encontramos o arquivo dentro do diretório referente ao controller. Verifique se o arquivo existe ou se alguma configuração está inadequada no arquivo "/routes.php".'); }

        return $archive_url;
    }

}