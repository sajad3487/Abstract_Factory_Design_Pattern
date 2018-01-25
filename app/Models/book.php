<?php
namespace App\Models;
require_once __DIR__ . "./../Database/MysqlDatabase.php";

use App\Database\MysqlDatabase;

class book
{

    public function createBook($data)
    {
        return MysqlDatabase::insert('book',$data);
    }

    public function getBook($id)
    {
        return MysqlDatabase::get_first('book','id',$id);
    }

    public function updateBook($data,$id)
    {
        return MysqlDatabase::update('book',$data,$id);
    }
}