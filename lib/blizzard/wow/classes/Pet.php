<?php

namespace Blizzard\Api\Wow\Kind;

require_once BLIZZARD_PATH.'wow/interfaces/ipet.php';
require_once BLIZZARD_PATH.'wow/classes/Wow.php';

use \Blizzard\Api\Wow\WowConnection;

class Pet extends \Blizzard\Api\Wow implements iPet
{
    protected static $request = 'pet/';

    protected function parametersValidation(Array $parameters , $rotine)
    {
        if($rotine === 'ability')
        {
            if(!isset($parameters['ability_id']) || empty($parameters['ability_id']))
            { throw new \Exception('No pet ability id as parameters. Please, verify if you sent The pet ability id into a array like this: ["ability" => 123]'); }

            if(!is_int($parameters['ability_id']))
            { throw new \Exception('The pet ability id needs to be a interger value. Please try again with a interger number.'); }
        }

        if($rotine === 'species')
        {
            if(!isset($parameters['species_id']) || empty($parameters['species_id']))
            { throw new \Exception('No pet species id as parameters. Please, verify if you sent The pet species id into a array like this: ["ability" => 123]'); }

            if(!is_int($parameters['species_id']))
            { throw new \Exception('The pet species id needs to be a interger value. Please try again with a interger number.'); }
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

    public function getAbility($parameters)
    {
        try
        {
            $this->parametersValidation((!is_array($parameters)) ? array() : $parameters , 'ability');
            $this->obj_connection->setKindUri(self::$request . 'ability/' . $parameters['ability_id']);
            $this->obj_connection->sendRequest();
            $response = $this->obj_connection->getResponse();
        }
        catch(\Exception $e) { exit($e->getMessage()); }

        return $response;
    }
    public function getSpecies($parameters)
    {
        try
        {
            $this->parametersValidation((!is_array($parameters)) ? array() : $parameters , 'species');
            $this->obj_connection->setKindUri(self::$request . 'species/' . $parameters['species_id']);
            $this->obj_connection->sendRequest();
            $response = $this->obj_connection->getResponse();
        }
        catch(\Exception $e) { exit($e->getMessage()); }

        return $response;
    }
    public function getStats($parameters) { }
}