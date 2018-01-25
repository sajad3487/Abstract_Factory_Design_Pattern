<?php
namespace App\ProductAbstractFactory;

require_once __DIR__ . "/Product.php";

class BookProduct implements Product {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getData()
    {
        $data['title'] = $this->name;
        $data['description'] = 'This is a test product for Book Category';
        $data['price'] = $this->price;

        //You can use specific logic based on the type of product and scale type of Book product from this class
        $data['type'] = 'novel';
        $data['pages'] = 200;
        $data['status'] = 1;
        return $data;
    }
}