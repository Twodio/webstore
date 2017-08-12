<?php

/*
 * nao usar classe com o mesmo nome do indice principal
 * se usado, fara com que este seja carregado como construtor
 * resultado em carregamento duplo deste método, ou seja
 * quando a class é instanciada e quando o metodo é chamado
 */

class Home extends Controller {

    public function index($data = []){
        //$home = $this->model('')
        $this->view('templates/header');
        $item = $this->model('Item');
        $this->view('public/home', $item->getItems());
        $this->view('templates/footer');
    }

    public function other(){
        $this->view('templates/header');
        print "details part of index, as index:details";
        $this->view('templates/footer');
    }

}
