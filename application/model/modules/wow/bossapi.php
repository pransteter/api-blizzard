<?php

namespace Blizzard\Model\Modules;

require_once MODEL_PATH . 'Model.php';
require_once BLIZZARD_PATH.'wow/WowConnection.php';

use Blizzard\Api\Wow\WowConnection;

class Bossapi extends \Blizzard\Model\Model
{

    public function getAll()
    {

        $obj = new WowConnection();
        $retorno = $obj->sendRequest();
        echo "<pre>"; print_r($retorno); echo "<hr>"; exit;

    }

}