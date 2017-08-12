<?php

class Cesto {
    protected $items = [];

    public function add($item, $qnt){
        
        if(!isset($this->items[$item])){
            $this->items[$item]['qnt'] = $qnt;
        } else {
            $this->items[$item]['qnt'] += $qnt;
        }
        //$this->items[] = $item;
    }

    public function rem($item, $qnt){
        if($this->items[$item] > $qnt){
            $this->items[$item] -= $num;
            return true;
        } elseif($this->items[$item] == $qnt){
            unset($this->items[$item]);
            return true;
        } else {
            return false;
        }
    }

    public function getItems(){
        return $this->items;
    }
}
