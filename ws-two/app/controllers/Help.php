<?php

class Help extends Controller {

    public function index($data = []){
        //$home = $this->model('')
        $this->view('templates/header');
        $item = $this->model('Item');
        $this->view('public/help', 
        (object)[
            'navigation' => 'use the links above to navigate throught the website',
            'contact'  => 'please, open the contacr link, then follow the instructions',
            'map' => 'Our map can help you find us'
        ]);
        $this->view('templates/footer');
    }

    public function other(){
        $this->view('templates/header');
        print "we're inside help:other";
        $this->view('templates/footer');
    }

}
