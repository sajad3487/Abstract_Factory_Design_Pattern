<?php
namespace App;

use App\ProductAbstractFactory\BookProductFactory;
use App\ProductAbstractFactory\ClothingProductFactory;
use App\ProductAbstractFactory\ElectronicProductFactory;

require_once __DIR__ . "/ProductsAbstractFactory/BookProductFactory.php";
require_once __DIR__ . "/ProductsAbstractFactory/ClothingProductFactory.php";
require_once __DIR__ . "/ProductsAbstractFactory/ElectronicProductFactory.php";

//$product = new BookProductFactory();
//$my_product = $product->createProduct('Harry potter',35);
//var_dump($my_product);

//
//$product = new ClothingProductFactory();
//$my_product = $product->createProduct('Green shirt', 5);
//var_dump($my_product);

//$product = new ElectronicProductFactory();
//$my_product = $product->createProduct('iphone 5', 150);
//var_dump($my_product);

echo "This is Abstract Factory Design Pattern";