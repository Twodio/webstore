<?php

class Error extends Controller {

    public function index(){
        $this->view('templates/header');
        $this->view('templates/error');
        $this->view('templates/footer');
    }

    public function not_found(){
        $this->view('templates/header');
        print "page not found";
        $this->view('templates/footer');
    }
}
