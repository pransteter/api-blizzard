<?php

namespace Blizzard\Api\Wow\Kind;

interface iPet
{
    public function getAll();
    public function getAbility($parameters);
    public function getSpecies($parameters);
    public function getStats($parameters);
}