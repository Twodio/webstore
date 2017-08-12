<?php

class Item {
    private $name;
    private $items = [
        "products" => [
            [
                "code" => 109,
                "category" => 1,
                "name" => "Genius Mouse + Adaptor",
                "price" => 40.00,
                "description" => "some description related",
                "available" => 1 
            ],
            [
                "code" => 89,
                "category" => 2,
                "name" => "Blue Pants XL",
                "price" => 20.00,
                "description" => "some description related",
                "available" => 1
            ]
        ],
        "category" => [
            [
                "code" => 1,
                "name" => "hardware",
                "order" => 2,
                "visibility" => 1
            ],
            [
                "code" => 2,
                "name" => "clothes",
                "order" => 1,
                "visibility" => 1
            ]
        ]
    ];

    public function setItem($item){
        $this->item = $item;
    }
    
    public function getItem($item){
        return $this->item[$item];
    }

    public function getItems(){
        return $this->items;
    }
}
