<?php

namespace Blizzard\Model\Modules;

require_once MODEL_PATH . 'Model.php';

class Main extends \Blizzard\Model\Model
{

    public function getUser()
    {
        return $this->mapper->boss(1)->fetch();
    }

}