<?php

namespace App\ProductAbstractFactory;


require_once __DIR__ . "/Product.php";

class ClothingProduct implements Product {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
    public function getData()
    {
        $data['title'] = $this->name;
        $data['description'] = 'This is a test product for Cloth Category';
        $data['price'] = $this->price;

        //You can use specific logic based on the type of product and scale type of Cloth product from this class
        $data['type'] = 't-shirt';
        $data['size'] = 32;
        $data['status'] = 1;
        return $data;
    }
}