<?php

DEFINE('DS', DIRECTORY_SEPARATOR);
DEFINE('MAIN_ROOT', dirname(dirname(__FILE__)));
DEFINE('PUBLIC_PATH', MAIN_ROOT . DS . 'ws');
DEFINE('PRIVATE_PATH', MAIN_ROOT . DS . 'app');
DEFINE('LIB_PATH', PRIVATE_PATH . DS . 'lib');
DEFINE('CONTROLLERS', PRIVATE_PATH . DS . 'controllers');
DEFINE('MODELS', PRIVATE_PATH . DS . 'models');
DEFINE('VIEWS', PRIVATE_PATH . DS . 'views');
DEFINE('URL', 'http://127.0.0.1:8080' . DS .'versions' . DS . 'ws-four' . DS . 'ws' . DS);

spl_autoload_register(function($class){
    foreach(get_defined_constants(true)['user'] as $path){
        if($path === 'DS'){continue;}
        if(is_dir($path)){
            if(file_exists($path . DS . $class . '.php')){
               require_once $path . DS . $class . '.php'; 
            }
        }
    }
});

