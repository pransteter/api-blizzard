<?php

namespace Blizzard\Api\Wow\Kind;

require_once BLIZZARD_PATH.'wow/interfaces/iboss.php';
require_once BLIZZARD_PATH.'wow/classes/Wow.php';

use \Blizzard\Api\Wow\WowConnection;

class Boss extends \Blizzard\Api\Wow implements iBoss
{
    protected static $request = 'boss/';

    // Fazer validação de parametros, neste caso, apenas verificar se é integer o id do boss.
    protected function parametersValidation(Array $parameters){ echo "teste"; }

    function __construct(WowConnection $obj_wow_connection)
    {
        $obj_wow_connection->setKindUri(self::$request);
        parent::__construct($obj_wow_connection);
    }

    public function getAll()
    {
        $this->obj_connection->sendRequest();
        return $this->obj_connection->getResponse();
    }

    public function getBoss($boss_id)
    {
        $this->obj_connection->setKindUri(self::$request . $boss_id);
        $this->obj_connection->sendRequest();
        return $this->obj_connection->getResponse();
    }
}