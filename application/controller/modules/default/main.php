<?php

namespace Blizzard\Controller\Modules;

require_once CONTROLLER_PATH . 'Controller.php';

class Main extends \Blizzard\Controller\Controller
{

    public function mainAction()
    {
        exit('Estudos com a API da Blizzard.');

        //$parametros = $this->getUrlParameters();

        // mandar o model Boss salvar todos os Bosses no banco.
        
        //$pagina = $this->getView('default' , 'main');
        //$pagina->paginaInicial($usuario);
    }

}