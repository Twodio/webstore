<?php

class Item {
    protected $id, $name, $price;
    protected $items = [
        "products" => [
            [
                "code" => 109,
                "category" => 1,
                "name" => "Genius Mouse + Adoptor",
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
            ],
            [
                "code" => 67,
                "category" => 2,
                "name" => "Blue Pants XL",
                "price" => 20.00,
                "description" => "some description related",
                "available" => 1
            ],
            [
                "code" => 34,
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

    public function __construct($id = "", $name = "", $price = ""){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getItems(){
        return $this->items;
    }
}

