<?php

class Cesto {
    private $items;

    public function add($item, $qnt){
        $this->items[$item] += $qnt;
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
}
