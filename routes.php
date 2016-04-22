<?php

$permited_urls = array('/' , '/boss');

$routes =
    array(
        '/' => array(
            'module' => 'default' ,
            'controller' => 'main' ,
            'action' => 'main' ,
            'parameters_limit' => 0
        ),
        '/boss' => array(
            'module' => 'wow' ,
            'controller' => 'boss' ,
            'action' => 'main' ,
            'parameters_limit' => 1
        )
    );

define('PERMITED_URLS' , serialize($permited_urls));
define('ROUTES' , serialize($routes));