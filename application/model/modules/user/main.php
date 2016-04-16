<?php

namespace Apis\Model\Modules;

require_once MODEL_PATH . 'Model.php';

class Main extends \Apis\Model\Model
{

    public function getUser()
    {
        return $this->mapper->boss(1)->fetch();
    }

}