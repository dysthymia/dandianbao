<?php
define('APP_NAME', 'shopgroup');
define('DDB_ROOT', dirname(__FILE__) . '/');
define('APP_PATH', DDB_ROOT . 'Core/Backend/');
define('DATA_PATH', DDB_ROOT . 'Core/Data/');
define('COMMON_PATH', DDB_ROOT . 'Core/Common/');
define('LANG_PATH', DDB_ROOT . 'Core/Lang/');
define('RUNTIME_PATH', DDB_ROOT . 'Core/Runtime/Backend/');
//define('APP_DEBUG', TRUE);
require(DDB_ROOT . "Core/ThinkPHP/ThinkPHP.php");