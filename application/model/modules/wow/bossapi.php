<?php

namespace Blizzard\Model\Modules;

require_once MODEL_PATH . 'Model.php';
require_once BLIZZARD_PATH.'wow/WowConnection.php';
require_once BLIZZARD_PATH.'wow/classes/Boss.php';

use Blizzard\Api\Wow\WowConnection;
use Blizzard\Api\Wow\Kind\Boss;

class Bossapi extends \Blizzard\Model\Model
{

    public function getAll()
    {
        $obj_boss = new Boss(new WowConnection());
        return $obj_boss->getAll();
    }

    public function getBoss($boss_id)
    {
        $obj_boss = new Boss(new WowConnection());
        return $obj_boss->getBoss(array('id' => $boss_id));
    }

}