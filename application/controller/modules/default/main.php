<?php

require_once CONTROLLER_PATH . 'controller.php';

class Main extends \Apis\Controller\Controller
{
	
    public function mainAction()
    {
        $parametros = $this->getUrlParameters();
        echo "<pre>"; print_r($parametros); echo "<hr>";exit;
    }

}