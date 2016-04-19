<?php

namespace Blizzard\Controller\Modules;

require_once CONTROLLER_PATH . 'Controller.php';

class Main extends \Blizzard\Controller\Controller
{

    public function mainAction()
    {
        //$parametros = $this->getUrlParameters();

        $model_bossapi = $this->getModel('wow' , 'bossapi');
        $bosses = $model_bossapi->getAll();

        $boss = $model_bossapi->getBoss(41376);

        echo '<pre>';
        print_r($boss);
        echo '<hr>';
        print_r($bosses);
        exit;

        // mandar o model Boss salvar todos os Bosses no banco.
        
        //$pagina = $this->getView('default' , 'main');
        //$pagina->paginaInicial($usuario);
    }

}