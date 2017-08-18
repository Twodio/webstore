<?php

class Help extends Default_Controller {
    protected $all = [];

    public function __construct($all = []){
        $this->all = $all;
        //var_dump($all);
    }
    
    public function index(){
        $this->view('templates/header');
        $this->view('ws/help',(object)[
            'navigation' => 'use the links above to navigate throught the website',
            'contact'  => 'please, open the contacr link, then follow the instructions',
            'map' => 'Our map can help you find us'
        ]);
        $this->view('templates/footer');
    }

}
