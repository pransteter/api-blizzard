<?php

namespace Blizzard\Controller\Modules;

require_once CONTROLLER_PATH . 'Controller.php';

class Pet extends \Blizzard\Controller\Controller
{

    public function mainAction()
    {
        $parametros = $this->getUrlParameters();

        if(isset($parametros[0]) && $parametros[0] == 'update_database')
        { $this->updatePets(); }

        /*$model_bossapi = $this->getModel('wow' , 'bossapi');
        $boss = $model_bossapi->getBoss(41376);

        echo '<pre>';
        print_r($boss);
        echo '<hr>';

        exit;*/
    }

    public function updatePets()
    {
        $model_petapi = $this->getModel('wow' , 'petapi');
        $response = $model_petapi->getAll();

        if(!isset($response->pets))
        { exit('Não foi possível realizar o processo de atualização de pets pois o retorno da API não foi o esperado.'); }

        $model_pet = $this->getModel('wow' , 'pet');

        if(!$model_pet->updateAll($response->pets))
        { exit('Não foi possível realizar o processo de atualização de pets devido algum problema interno com o banco de dados.'); }

        exit('Pets atualizados com sucesso em banco de dados.');
    }

}