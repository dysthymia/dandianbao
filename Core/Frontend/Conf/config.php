<?php
$config = array(
    'DEFAULT_TIMEZONE'=>'Asia/Shanghai',
    'URL_MODEL' => 0,
    'APP_AUTOLOAD_PATH' => '@.Common,Com.Model',
    'URL_CASE_INSENSITIVE' => true,
    'TMPL_ACTION_ERROR' => DDB_ROOT . 'Core/Tpl/dispatch_jump.tpl',
    'TMPL_ACTION_SUCCESS' => DDB_ROOT . 'Core/Tpl/dispatch_jump.tpl',
    'TMPL_EXCEPTION_FILE' => DDB_ROOT . 'Core/Tpl/exception.tpl',
    'SHOW_ERROR_MSG' => true,
    //'SHOW_PAGE_TRACE' =>true,
);

if(is_file(DATA_PATH . 'config.php')){
    $appConfig = require(DATA_PATH . 'config.php');
    $config = array_merge($config, $appConfig);
}

return $config;