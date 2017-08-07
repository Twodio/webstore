<?php

class Home extends Controller {

    public function index($name = 'Unknow'){
        $user = $this->model('User');
        $user->setUser($name);

        $this->view('templates/header');
        $this->view('public/home', (object)['name'=>$user->getUser()]);
        $this->view('templates/footer');
    }

    public function contactos(){
        $this->view('templates/header');
        $this->view('public/contacto', 
        (object)[
            'email' => 'example@mail.com',
            'fixo'  => '222 345 768',
            'endereco' => 'Rua 3º Nova Avenida'
        ]);
        $this->view('templates/footer');
    }

}
