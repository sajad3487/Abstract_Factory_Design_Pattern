<?php

namespace App;

use App\ProductAbstractFactory\BookProductFactory;
use App\ProductAbstractFactory\ClothingProduct;
use App\ProductAbstractFactory\ClothingProductFactory;
use App\ProductAbstractFactory\ElectronicProductFactory;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/ProductsAbstractFactory/BookProductFactory.php";
require_once __DIR__ . "/ProductsAbstractFactory/ClothingProductFactory.php";
require_once __DIR__ . "/ProductsAbstractFactory/ElectronicProductFactory.php";

class TestAbstractFactory extends TestCase
{
    public function testElectronicProduct()
    {
        $product = new ElectronicProductFactory();
        $my_product = $product->createProduct('iphone 5', 150);
        $this->assertEquals($my_product,$product->getProduct($my_product['id']));
    }

    public function testBookFactory()
    {
        $product = new BookProductFactory();
        $my_product = $product->createProduct('Harry Potter', 20);
        $this->assertEquals($my_product,$product->getProduct($my_product['id']));
    }


    public function testClothFactory()
    {
        $product = new ClothingProduct();
        $my_product = $product->createProduct('green t-shirt', 5);
        $this->assertEquals($my_product,$product->getProduct($my_product['id']));
    }
}