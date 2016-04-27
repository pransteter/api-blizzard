<?php

namespace Blizzard\Api\Wow\Kind;

require_once BLIZZARD_PATH.'wow/interfaces/ipet.php';
require_once BLIZZARD_PATH.'wow/classes/Wow.php';

use \Blizzard\Api\Wow\WowConnection;

class Pet extends \Blizzard\Api\Wow implements iPet
{
    protected static $request = 'pet/';

    protected function parametersValidation(Array $parameters) { }

    function __construct(WowConnection $obj_wow_connection)
    {
        $obj_wow_connection->setKindUri(self::$request);
        parent::__construct($obj_wow_connection);
    }

    public function getAll()
    {
        try
        {
            $this->obj_connection->sendRequest();
            $response = $this->obj_connection->getResponse();
        }
        catch(\Exception $e) { exit($e->getMessage()); }

        return $response;
    }

    public function getAbility($parameters) { }
    public function getSpecies($parameters) { }
    public function getStats($parameters) { }
}