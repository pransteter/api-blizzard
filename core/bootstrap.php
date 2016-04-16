<?php
namespace Apis\Bootstrap;

use Apis\Loader\Loader;

class Bootstrap
{
    static private $smarty = false;
    static private $permited_urls = false;
    static private $routes = false;

    function __construct()
    {
        $this->setRoutes(); 
        $this->configSmarty();
        
        require_once HELPER_PATH.'Loader.php';
        new Loader(self::$permited_urls , self::$routes , self::$smarty);
    }

    private function configSmarty()
    {
        require_once SERVER_ROOT.'core/vendor/smarty/smarty/libs/Smarty.class.php';

        $obj_smarty = new \Smarty();

        $obj_smarty->setTemplateDir(VIEW_PATH);
        $obj_smarty->setCompileDir(CORE_PATH.'smarty_files/templates_c/');
        $obj_smarty->setConfigDir(CORE_PATH.'smarty_files/configs/');
        $obj_smarty->setCacheDir(CORE_PATH.'smarty_files/cache/');

        self::$smarty = $obj_smarty;
    }

    private function setRoutes()
    {
        require_once SERVER_ROOT.'routes.php';

        self::$permited_urls = unserialize(PERMITED_URLS);
        self::$routes = unserialize(ROUTES);
    }
}