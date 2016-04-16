<?php

namespace Apis\Model;

require_once SERVER_ROOT.'database_config.php';
require_once CORE_PATH.'vendor/autoload.php';

class Model
{
    static private $configuration = false;
    protected $mapper = false;

    function __construct()
    {
        try
        {
            self::$configuration = (!self::$configuration) ? unserialize(DB_CONFIGURATION) : self::$configuration;
            $this->connect();
        }
        catch(\Exception $e) { exit($e->getMessage()); }
    }

    private function connect()
    {
        try
        {
            $pdo_object = new \PDO($this->getPDOConfiguration(), self::$configuration['user'], self::$configuration['password']);
            $this->mapper = new \Respect\Relational\Mapper($pdo_object);
        }
        catch(\Exception $e) { throw new \Exception('N�o foi poss�vel realizar a conex�o com o banco de dados. Verifique as configura��es do banco.'); }
    }

    private function getPDOConfiguration()
    {
        $this->configurationValidation(self::$configuration);
        return 'mysql:dbname=' . self::$configuration['database'] . ';host=' . self::$configuration['address'] . ';charset=utf8';
    }

    private function configurationValidation($info)
    {
        if(!isset($info['database']) || empty($info['database']) || !is_string($info['database']))
        { throw new \Exception('O nome do banco n�o foi configurado corretamente. Verifique a configura��o presente no arquivo "/database_config.php"'); }

        if(!isset($info['address']) || empty($info['address']) || !is_string($info['address']))
        { throw new \Exception('O endere�o do banco n�o foi configurado corretamente. Verifique a configura��o presente no arquivo "/database_config.php"'); }

        if(!isset($info['user']) || empty($info['user']) || !is_string($info['user']))
        { throw new \Exception('O usu�rio do banco n�o foi configurado corretamente. Verifique a configura��o presente no arquivo "/database_config.php"'); }

        if(!isset($info['password']))
        { throw new \Exception('A senha do banco n�o foi configurada corretamente. Verifique a configura��o presente no arquivo "/database_config.php"'); }
    }

}