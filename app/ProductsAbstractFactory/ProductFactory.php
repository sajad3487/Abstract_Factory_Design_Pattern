<?php

namespace App\ProductAbstractFactory;


interface ProductFactory
{
    public function createProduct($name, $price);
}