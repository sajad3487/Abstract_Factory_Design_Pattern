<?php

namespace App\ProductAbstractFactory;

use App\Models\electronic;

require_once __DIR__ . "/ProductFactory.php";
require_once __DIR__ . "/ElectronicProduct.php";
require_once __DIR__ . "/../Models/electronic.php";


class ElectronicProductFactory implements ProductFactory {
    public $electronic;
    public function __construct()
    {
        $this->electronic = new electronic();
    }
    public function createProduct($name, $price) {
        $electronic_product = new ElectronicProduct($name,$price);
        return $this->electronic->createElectronic($electronic_product->getData());
    }

    public function getProduct($product_id)
    {
        return $this->electronic->getBook($product_id);
    }
}