<?php

namespace Blizzard\Api;

abstract class Wow
{
    protected $obj_connection;

    function __construct(\Blizzard\Api\Wow\WowConnection $obj_wow_connection)
    {
        $this->obj_connection = $obj_wow_connection;
    }

    abstract protected function parametersValidation(Array $parameters);
}