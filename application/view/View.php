<?php

namespace Apis\View;

require_once SERVER_ROOT.'database_config.php';
require_once CORE_PATH.'vendor/autoload.php';

class View
{
    static private $smarty = false;

    function __construct()
    {
        try { $this->startSmarty(); }
        catch(\Exception $e) { exit($e->getMessage()); }
    }

    private function startSmarty()
    {
        try
        {
            require_once SERVER_ROOT.'core/vendor/smarty/smarty/libs/Smarty.class.php';

            $obj_smarty = new \Smarty();

            $obj_smarty->setTemplateDir(TEMPLATE_PATH);
            $obj_smarty->setCompileDir(CORE_PATH.'smarty_files/templates_c/');
            $obj_smarty->setConfigDir(CORE_PATH.'smarty_files/configs/');
            $obj_smarty->setCacheDir(CORE_PATH.'smarty_files/cache/');

            self::$smarty = $obj_smarty;
        }
        catch(\Exception $e) { throw new \Exception('Não foi possível inicializar o Smarty neste projeto. Verifique a configuração do smarty presente na classe View.'); }
    }

    protected function assign($var_name , $var_value) { return self::$smarty->assign($var_name , $var_value); }

    protected function display($template_address) { return self::$smarty->display($template_address); }

    protected function fetch($template_address) { return self::$smarty->fetch($template_address); }

}