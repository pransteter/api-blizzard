<?php

namespace Blizzard\Api\Wow\Kind;

interface iBoss
{
	public function getBoss($boss_id);
	public function getAll();
}