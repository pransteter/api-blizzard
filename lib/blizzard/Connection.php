<?php

namespace Blizzard\Api;

require_once CORE_PATH.'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

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
    protected static $response_object = false;

    function __construct()
    { self::$connection = new Client(['base_uri' => self::$request_start . $this->particular_uri , 'timeout'  => 99.0]); }

    public function sendRequest($new_parameters = array())
    {
        $uri = self::$request_start . $this->particular_uri;
        $parameters = array_merge((is_array($new_parameters)) ? $new_parameters : array() , self::$base_parameters);
        echo "<pre>"; print_r(['query' => $parameters]); echo "<hr>";
        echo "<pre>"; print_r($uri); echo "<hr>";
        //echo "<pre>"; print_r(self::$connection); echo "<hr>"; 
        $retorno = self::$connection->request('GET' , $uri , ['query' => $parameters]);
        echo "<pre>"; print_r($retorno); echo "<hr>";exit;
        try
        {
            

        }catch (RequestException $e) {
            print_r($e->getRequest());
            echo "<hr>";
            print_r($e->getResponse());
        }

            
        /*echo "<pre>"; print_r($retorno);*/ exit;
    }
}