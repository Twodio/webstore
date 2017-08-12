<?php

class Controller {
    protected function model($model){
        //require_once 
        return new $model();
    }
    
    protected function view($view, $data = []){
        require_once VIEWS . DS . $view . '.php';
    }
}
