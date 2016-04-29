<?php

namespace Blizzard\Api\Wow\Kind;

require_once BLIZZARD_PATH.'wow/interfaces/iboss.php';
require_once BLIZZARD_PATH.'wow/classes/Wow.php';

use \Blizzard\Api\Wow\WowConnection;

class Boss extends \Blizzard\Api\Wow implements iBoss
{
    protected static $request = 'boss/';

    protected function parametersValidation(Array $parameters , $rotine)
    {
        if($rotine === 'boss')
        {
            if(!isset($parameters['id']) || empty($parameters['id']))
            { throw new \Exception('No boss id as parameters. Please, verify if you sent The boss id into a array like this: ["id" => 123]'); }

            if(!is_int($parameters['id']))
            { throw new \Exception('The boss id needs to be a interger value. Please try again with a interger number.'); }
        }
    }

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

    public function getBoss($parameters = array())
    {
        try
        {
            $this->parametersValidation((!is_array($parameters)) ? array() : $parameters , 'boss');
            $this->obj_connection->setKindUri(self::$request . $parameters['id']);
            $this->obj_connection->sendRequest();
            $response = $this->obj_connection->getResponse();
        }
        catch(\Exception $e) { exit($e->getMessage()); }

        return $response;
    }
}