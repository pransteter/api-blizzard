<?php

namespace Blizzard\Controller\Modules;

require_once CONTROLLER_PATH . 'Controller.php';

class Boss extends \Blizzard\Controller\Controller
{

    public function mainAction()
    {
        $parametros = $this->getUrlParameters();

        if(isset($parametros[0]) && $parametros[0] == 'update_database')
        { $this->updateBosses(); }

        $model_bossapi = $this->getModel('wow' , 'bossapi');
        $boss = $model_bossapi->getBoss(41376);

        echo '<pre>';
        print_r($boss);
        echo '<hr>';

        exit;
    }

    public function updateBosses()
    {
        $model_bossapi = $this->getModel('wow' , 'bossapi');
        $response = $model_bossapi->getAll();

        if(!isset($response->bosses))
        { exit('Não foi possível realizar o processo de atualização de chefões pois o retorno da API não foi o esperado.'); }

        $model_boss = $this->getModel('wow' , 'boss');

        if(!$model_boss->updateAll($response->bosses))
        { exit('Não foi possível realizar o processo de atualização de chefões devido algum problema interno com o banco de dados.'); }

        exit('Chefões atualizados com sucesso em banco de dados.');
    }



}