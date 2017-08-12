<?php

class About extends Controller {

    public function index($data = []){
        //$home = $this->model('')
        $this->view('templates/header');
        $item = $this->model('Item');
        $this->view('public/about', 
        (object)[
            'informacao' => 'website de teste',
            'email' => 'example@mail.com',
            'fixo'  => '222 345 768',
            'endereco' => 'Rua 3, Nova Avenida'
        ]);
        $this->view('templates/footer');
    }

}
