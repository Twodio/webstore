<?php

class Home extends Default_Controller {
    protected $all = [];

    public function __construct($all = []){
        $this->all = $all;
        //var_dump($all);
    }
    
    public function index(){
        $this->view('templates/header');
        $items = new Item();
        $this->view('ws/home', $items->getItems()['products']);
        $this->view('templates/footer');
    }
    
}
