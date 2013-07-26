<?php
return array(
    'URL_MODEL' => 0,
    'DEFAULT_TIMEZONE' => 'Asia/Shanghai',
    'TOKEN_ON' => true,
    'TOKEN_NAME' => '__hash__',
    'TOKEN_TYPE' => 'md5',
    'TOKEN_RESET' => true,
    'APP_AUTOLOAD_PATH' => '@.Common,Com.Function,Com.Model',
    'TMPL_ACTION_ERROR' => DDB_ROOT . 'Core/Tpl/dispatch_jump.tpl',
    'TMPL_ACTION_SUCCESS' => DDB_ROOT . 'Core/Tpl/dispatch_jump.tpl',
    'TMPL_EXCEPTION_FILE' => DDB_ROOT . 'Core/Tpl/exception.tpl',
    'SHOW_ERROR_MSG' => true,
    'SESSION_AUTO_START' => true,
    'USER_AUTH_KEY' => 'ddbAuthId',
);