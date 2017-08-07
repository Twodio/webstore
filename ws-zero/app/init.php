<?php

DEFINE('DS', DIRECTORY_SEPARATOR);
DEFINE('MAIN_ROOT', dirname(dirname(__FILE__)));
DEFINE('APP', MAIN_ROOT . DS . 'app');
DEFINE('CONTROLLERS', APP . DS . 'controllers');
DEFINE('MODELS', APP . DS . 'models');
DEFINE('VIEWS', APP . DS . 'views');
DEFINE('PUBLIC', APP . DS . 'ws');

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
