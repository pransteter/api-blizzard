<?php

namespace Blizzard\Controller\Modules;

require_once CONTROLLER_PATH . 'Controller.php';

class Main extends \Blizzard\Controller\Controller
{

    public function mainAction()
    {
        //$parametros = $this->getUrlParameters();

        $model_user = $this->getModel('wow' , 'bossapi');
        $bosses = $model_user->getAll();

        echo '<pre>';
        print_r($bosses);exit;
        
        //$pagina = $this->getView('default' , 'main');
        //$pagina->paginaInicial($usuario);
    }

}