<?php

namespace Blizzard\Api\Wow;

require_once BLIZZARD_PATH.'Connection.php';

final class WowConnection extends \Blizzard\Api\Connection
{
	protected $particular_uri = 'wow/boss/';
}