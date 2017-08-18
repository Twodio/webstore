<?php

class Cesto extends Default_Controller {
    protected $cart_items = [];
    protected $all;

    public function __construct($all = []){
        //$this->cart_items = (!empty($_SESSION['cart_items'])) ? $_SESSION['cart_items'] : [];
        $this->all = $all;
        if(!empty($_SESSION['cart_items'])):
            $this->cart_items = $_SESSION['cart_items'];
        endif;
    }

    public function index(){
        $this->view('templates/header');
        /**
         * inicializar o cesto com alguns itens
         */
        $this->add(['id'=>47, 'name'=>'First Item', 'price'=>19.90], 2);
        $this->add(['id'=>22, 'name'=>'Second Item', 'price'=>33.55], 4);
        $this->view('ws/cesto', $this);
        $this->view('templates/footer');
    }

    /**
     * Add to cart: add an specific item and quantity to cart
     * @param array, int
     * @return bool
     */
    public function add($item, $qnt){
        $rid = md5($item['id']);
        if(!isset($this->cart_items[$rid])):
            $this->cart_items[$rid] = ['item' => $item, 'qnt' => $qnt];
            if($this->save()):
                return (isset($rid)) ? $rid : false;
            else:
                return false;
            endif;
        endif;
        return false;
    }
    
    /**
     * Update cart: updates an item with its id and quantiy provided
     * @param array, int
     * @return bool
     */
    public function update($item, $qnt){     
        $rid = md5($item['id']);
        if(isset($this->cart_items[$rid])):
            $this->cart_items[$rid] = ['item' => $item, 'qnt' => $qnt];
            if($this->save()):
                return (isset($rid)) ? $rid : false;
            else:
                return false;
            endif;
        endif;
        return false;
    }

    /**
     * Delete cart item: deletes a specific item with its id
     * @param array
     * @return bool
     */
    public function delete($item){
        $rid = md5($item['id']);
        if(isset($this->cart_items[$rid])):
            unset($this->cart_items[$rid]);
            if($this->save()):
                return (isset($rid)) ? $rid : false;
            else:
                return false;
            endif;
        endif;
        return false;
    }

    /**
     * Gets the total: returns the cart total
     * @return bool
     */
    public function total(){
        if(count($this->cart_items)):
            return array_reduce($this->cart_items, function($sum, $item){
                return $sum + $item['item']['price'] * $item['qnt'];
        }, 0);
        else:
            // wheter or not using (bool) false instead
            // wait to see
            return (float)0;
        endif;
    }

    /**
     * Gets the subtotal: returns the item total
     * @param array
     * @return bool
     */
    public function subtotal($item){
        return (float)$item['item']['price'] * $item['qnt'];
    }

    /**
     * Fetch items: returns the cart items
     * @return array
     */
    public function fetch(){
        // problems here, wrong return format and invalid values
        // fixed, changed the initialising array inside the constructor
        if(count($this->cart_items)):
            return array_reverse($this->cart_items);
        else:
            return false;
        endif;
    }

    /**
     * Save cart: saves the cart into the session
     * @return bool
     */
    protected function save(){
        if(!count($this->cart_items)){
            unset($_SESSION['cart_items']);
            return false;
        } else {
            $_SESSION['cart_items'] = $this->cart_items;
            return true;
        }
    }
}

