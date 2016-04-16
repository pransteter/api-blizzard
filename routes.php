<?php

$permited_urls = array('/');

$routes =
    array(
        '/' => array(
            'module' => 'default' ,
            'controller' => 'main' ,
            'action' => 'main' ,
            'parameters_limit' => 0
        )
    );

define('PERMITED_URLS' , serialize($permited_urls));
define('ROUTES' , serialize($routes));