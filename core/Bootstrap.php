<?php

namespace Blizzard\Bootstrap;

use Blizzard\Loader\Loader;

class Bootstrap
{
    static private $permited_urls = false;
    static private $routes = false;

    function __construct()
    {
        $this->setRoutes();
        
        require_once HELPER_PATH.'Loader.php';
        
        new Loader(self::$permited_urls , self::$routes);
    }

    private function setRoutes()
    {
        require_once SERVER_ROOT.'routes.php';

        self::$permited_urls = unserialize(PERMITED_URLS);
        self::$routes = unserialize(ROUTES);
    }

}