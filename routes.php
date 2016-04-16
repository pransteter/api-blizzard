<?php

$permited_urls = array('/' , '/pagina-principal' , '/categoria' , '/teste');

$routes =
    array(
        '/' => array('module' => 'default' , 'controller' => 'main' , 'action' => 'main' , 'parameters_limit' => 0),
        '/pagina-principal' => array('module' => 'default' , 'controller' => 'main' , 'action' => 'main' , 'parameters_limit' => 1),
        '/categoria' => array('module' => 'default' , 'controller' => 'main' , 'action' => 'main' , 'parameters_limit' => 3)
    );

define('PERMITED_URLS' , serialize($permited_urls));
define('ROUTES' , serialize($routes));