<?php

namespace App\ProductAbstractFactory;


interface ProductFactory
{
    public function createProduct($name, $price);
    public function getProduct($product_id);
}