<?php

class About extends Default_Controller {
    protected $all = [];

    public function __construct($all = []){
        $this->all = $all;
        //var_dump($all);
    }
    
    public function index(){
        $this->view('templates/header');
        $this->view('ws/about', (object)[
            'informacao' => 'website de teste',
            'email' => 'example@mail.com',
            'fixo'  => '222 345 768',
            'endereco' => 'Rua 3, Nova Avenida'
        ]);
        $this->view('templates/footer');
    }

}
