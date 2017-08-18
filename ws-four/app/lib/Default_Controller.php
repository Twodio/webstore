<?php

class Default_Controller {

    protected $all = [];
    public function __construct($all = []){
        $this->all = $all;
        //var_dump($all);
    }
    
    protected function model($model){
        return new $model();
    }
    
    protected function view($view, $data = [], $all = false){
        /*
         * estado : opcional, embora qualquer alteracao, afecte a view directamente
         * funcao : fazer com que a $data adquira as mesmas propriedades que o objecto a ela referenciado
         */
        $all = $all ? : $this->all;
        if(is_object($data) || key_exists('products', $data)){
            ${strtolower(get_class($data))} = $data;
        }
        
        if(!in_array(explode('/', $view)[0], ['templates', 'ws', 'ws-admin'])):
            require_once VIEWS . DS . join(DS, explode('/', $view)) . '.php';
        elseif(!in_array(explode('/', $view)[1], ['header', 'footer'])):
            require_once VIEWS . DS . join(DS . 'view_', explode('/', $view)) . '.php';
        else:
            require_once VIEWS . DS . join(DS . 'tpl_', explode('/', $view)) . '.php';
        endif;
    }
}
