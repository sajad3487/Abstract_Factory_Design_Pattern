<?php
namespace App\Models;
require_once __DIR__ . "./../Database/MysqlDatabase.php";

use App\Database\MysqlDatabase;

class food
{

    public function createFood($data)
    {
        return MysqlDatabase::insert('food',$data);
    }

    public function getFood($id)
    {
        return MysqlDatabase::get_first('food','id',$id);
    }

    public function updateFood($data,$id)
    {
        return MysqlDatabase::update('food',$data,$id);
    }
}