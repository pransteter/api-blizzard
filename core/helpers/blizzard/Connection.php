<?php

namespace Blizzard\Api;

require_once CORE_PATH.'vendor/autoload.php';
use GuzzleHttp\Client;

abstract class Connection
{
    protected $particular_uri = '';

    protected static $base_parameters = 
        [
            'apikey' => 'utkjwu9vx72u4nxavjpj5eq2sarbgt75',
            'locale' => 'en_US'
        ];
    protected static $request_start = 'https://us.api.battle.net/';
    protected static $connection = false;

    function __construct() { self::$connection = new Client(self::$request_start . self::$particular_uri); }

    public function sendRequest($new_parameters = array())
    {
        $end_uri = $this->processParameters(array_merge((is_array($new_parameters)) ? $new_parameters : array() , self::$base_parameters));

        self::$connection->request(array('GET' => $end_uri));
    }

    private function processParameters($parameters)
    {
        $parameters_uri = '?';

        foreach($parameters as $name => $value) { $parameters_uri .= $name . '=' . $value . '&'; }

        return substr($parameters_uri,0,-1);
    }
}