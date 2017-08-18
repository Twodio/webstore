<?php
/*
 * Classe responsavel pela entrada dos parametros e selecao dos respectivos Models
 *
 */

class App {

    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
    //protected $configuration = [];

    public function __construct($extras = []){
        $url = $this->parseUrl();
        //$this->configuration = json_encode($configuration);
        //var_dump($url);


        /*
         * verificar na url se foi especificado um controller
         *
         */
        
        if(isset($url[0])){
            if(file_exists(CONTROLLERS . DS . $url[0] . '.php')){
                $this->controller = $url[0];
                unset($url[0]);
            } else {
                $this->controller = 'error';
                $this->method = 'not_found';
            }
        }

        //var_dump($this->controller);
        $this->controller = new $this->controller(...[$extras]);

        //var_dump($this->controller);
        //var_dump($url);

        /*
         * verificar na url se foi especificado um metodo do controller
         *
         */
         
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            } else {
                $this->controller = new Error();
                $this->method = 'not_found';
            }
        }

        //var_dump($url);
        //var_dump($this->method);

        //$this->controller->{$this->method}($this->params);

        // verificar url e respectivos valores
        $this->params = $url ? array_values($url) : [];

        // inicializar o controller e respectivo metodo com os parametros
        
        call_user_func_array([$this->controller, $this->method], ['params'=>$this->params]);
    }

    protected function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/')));
        }
        return false;
        
    }

    protected function getRoute($route = []){
        
    }  
}
