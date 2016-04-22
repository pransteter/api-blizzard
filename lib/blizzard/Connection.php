<?php

namespace Blizzard\Api;

require_once CORE_PATH.'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

abstract class Connection
{
    private static $request_start = 'https://us.api.battle.net/';
    protected $game_uri = '';
    private $kind_uri = '';

    private static $base_parameters =
        [
            'apikey' => '',
            'locale' => 'en_US'
        ];
    private static $connection = false;
    private static $response_object = false;

    function __construct()
    { self::$connection = new Client(['base_uri' => self::$request_start . $this->game_uri , 'timeout'  => 99.0]); }

    public function setKindUri($kind_uri = ''){ $this->kind_uri = $kind_uri; }

    public function sendRequest($new_parameters = array())
    {
        $parameters = array_merge((is_array($new_parameters)) ? $new_parameters : array() , self::$base_parameters);
        
        self::$response_object = self::$connection->request('GET' , $this->kind_uri , ['query' => $parameters]);
    }

    public function getResponse()
    {
        if(!is_object(self::$response_object) || !(self::$response_object instanceof \GuzzleHttp\Psr7\Response))
        { return 'Não foi possível receber um retorno da API da Blizzard!'; }
        
        return json_decode(self::$response_object->getBody());
    }

}