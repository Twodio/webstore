<?php

class User {
    private $name;

    public function setUser($name){
        $this->name = $name;
    }
    
    public function getUser(){
        return $this->name;
    }
}
