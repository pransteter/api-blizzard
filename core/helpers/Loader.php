<?php

namespace Apis\Loader;

use \Apis\Factory\ControllerFactory;

require_once SERVER_ROOT.'core/Bootstrap.php';

class Loader
{
    function __construct($permited_urls , $routes)
    {
		try
		{
			$load_information = $this->urlValidation($permited_urls , $routes);

            require_once HELPER_PATH.'ControllerFactory.php';
            new ControllerFactory($load_information);
		}
		catch(\Exception $e) { exit($e->getMessage()); }
    }

	private function urlValidation($permited_urls , $routes)
	{
		$fragmented_url = array_filter(explode('/' , $_SERVER['REQUEST_URI']));

		// quando utiliza xampp, lampp, etc... (ele (o xampp...) cria um diretório além do raiz)
		if(!PRODUCTION_ENVIRONMENT) { if(isset($fragmented_url[1])) { unset($fragmented_url[1]); } }

		$attempts_number = count($fragmented_url);

		$flag_denied_url = true;
		$parameters = array();
		$attempt = '';

        if($attempts_number === 0)
        {
            $flag_denied_url = false;
            $attempt = '/';
        }

		for($attempts_counter = 1 ; $attempts_counter <= $attempts_number ; $attempts_counter++)
		{
			$last_url_member = array_search(end($fragmented_url) , $fragmented_url);
			if($attempts_counter > 1)
			{
				$parameters[] = $fragmented_url[$last_url_member];
				unset($fragmented_url[$last_url_member]);
			}

			$attempt = '/' . implode('/' , $fragmented_url);
			if(in_array($attempt , $permited_urls))
			{
				$flag_denied_url = false;
				break;
			}
		}

		if($flag_denied_url)
		{ throw new \Exception('Não existe permissão configurada para este url. Por favor, realize a configuração no arquivo "/routes.php".'); }

		if(!isset($routes[$attempt]['module']) || !isset($routes[$attempt]['controller']) || !isset($routes[$attempt]['parameters_limit']))
		{ throw new \Exception('Não existe rota configurada para este url. Por favor, realize a configuração no arquivo "/routes.php".'); }

		if(count($parameters) > $routes[$attempt]['parameters_limit'])
		{ throw new \Exception('Quantidade de parametros contidos na url é maior que a configurada. Por favor, realize a configuração no arquivo "/core/bootstrap.php".'); }

		return array('destiny' => $routes[$attempt] , 'url_parameters' => array_reverse($parameters));
	}

}