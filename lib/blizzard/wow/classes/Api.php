<?php

namespace Blizzard\Api;

abstract class Wow
{
    abstract protected $request;

    abstract protected function parametersValidation(Array $parameters){  }
}