<?php

namespace App\ProductAbstractFactory;

use App\Database\MysqlDatabase;
use App\Models\book;

require_once __DIR__ . "/ProductFactory.php";
require_once __DIR__ . "/BookProduct.php";
require_once __DIR__ . "/../Models/book.php";


class BookProductFactory implements ProductFactory {
    public $book;
    public function __construct()
    {
        $this->book = new book();
    }
    public function createProduct($name, $price) {
        $book_product = new BookProduct($name, $price);
        $data = $book_product->getData();
        return $this->book->createBook($data);
    }

    public function getProduct($product_id)
    {
        return $this->book->getBook($product_id);
    }
}