<?php

namespace Apis\Controller;

class Controller
{
    private $parameters = false;

    function __construct($parameters = false) { $this->parameters = $parameters; }

    /**
     * Função para pegar todos os parametros passados pela url.
     * Obs.: Não se esqueça de configurar o número limite para parâmetros em url no arquivo "/routes.php"
     * @return array
     */
    protected function getUrlParameters() { return $this->parameters; }

    /**
     * Função para criar o objeto da camada Model.
     * @param null $module_name
     * @param null $model_name
     * @return Model Object
     */
    protected function getModel($module_name = null , $model_name = null)
    {
        $parameters = array('module' => $module_name , 'model' => $model_name);

        require_once HELPER_PATH . 'ModelFactory.php';

        try
        {
            $factory = new \Apis\Factory\ModelFactory($parameters);
            $model_object = $factory->getObject();
        }
        catch(\Exception $e) { exit($e->getMessage()); }

        return $model_object;
    }

    /**
     * Função para criar o objeto da camada View.
     * @param null $module_name
     * @param null $view_name
     * @return View Object
     */
    protected function getView($module_name = null , $view_name = null)
    {
        $parameters = array('module' => $module_name , 'view' => $view_name);

        require_once HELPER_PATH . 'ViewFactory.php';

        try
        {
            $factory = new \Apis\Factory\ViewFactory($parameters);
            $view_object = $factory->getObject();
        }
        catch(\Exception $e) { exit($e->getMessage()); }

        return $view_object;
    }

    /**
     * Função para mudar de controller, redirecionar.
     * @param null $module_name
     * @param null $controller_name
     * @param null $action_name
     */
    protected function redirect($module_name = null , $controller_name = null , $action_name = null , $parameters = null)
    {
        $destiny = array('module' => $module_name , 'controller' => $controller_name , 'action' => $action_name);

        require_once HELPER_PATH . 'ControllerFactory.php';

        try { new \Apis\Factory\ControllerFactory(array('destiny' => $destiny , 'url_parameters' => $parameters)); }
        catch(\Exception $e) { exit($e->getMessage()); }
    }
}