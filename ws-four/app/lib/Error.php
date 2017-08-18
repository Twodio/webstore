<?php

class Error extends Default_Controller {
    public function not_found(){
        $this->view('templates/header');
        $this->view('error/404');
        $this->view('templates/footer');
    }
}
