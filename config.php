<?php

define('PRODUCTION_ENVIRONMENT', true);

// Hosts
define('SERVER_ROOT',dirname(__FILE__)."/");
define('URL_ROOT','/'); // mudar o URL_ROOT quando o ambiente for de produ��o.
define('CORE_PATH',SERVER_ROOT."core/");
define('HELPER_PATH',SERVER_ROOT."core/helpers/");
define('TEMPLATE_PATH',SERVER_ROOT."application/view/template");
define('VIEW_PATH',SERVER_ROOT."application/view/");
define('MODEL_PATH',SERVER_ROOT."application/model/");
define('CONTROLLER_PATH',SERVER_ROOT."application/controller/");
define('CSS_PATH',URL_ROOT."assets/css/");
define('JS_PATH',URL_ROOT."assets/js/");
define('IMG_PATH',URL_ROOT."assets/img/");
define('BLIZZARD_PATH',URL_ROOT."core/helpers/blizzard/");