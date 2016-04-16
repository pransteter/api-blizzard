<?php

$config =
    array(
        'database' => 'api_blizzard',
        'address' => '192.168.33.10',
        'user' => 'root',
        'password' => 'vagrant'
    );

define('DB_CONFIGURATION' , serialize($config));