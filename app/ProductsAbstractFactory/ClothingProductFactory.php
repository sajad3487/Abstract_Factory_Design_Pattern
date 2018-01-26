<?php

namespace App\ProductAbstractFactory;

use App\Database\MysqlDatabase;
use App\Models\cloth;

require_once __DIR__ . "/ProductFactory.php";
require_once __DIR__ . "/ClothingProduct.php";
require_once __DIR__ . "/../Models/cloth.php";


class ClothingProductFactory implements ProductFactory {
    public $cloth;
    public function __construct()
    {
        $this->cloth = new cloth();
    }
    public function createProduct($name, $price) {
        $cloth_product = new ClothingProduct($name,$price);
        return $this->cloth->createCloth($cloth_product->getData());
    }

    public function getProduct($product_id)
    {
        return $this->cloth->getBook($product_id);
    }
}