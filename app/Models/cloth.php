<?php

namespace App\Models;
require_once __DIR__ . "./../Database/MysqlDatabase.php";

use App\Database\MysqlDatabase;

class cloth
{
    public function createCloth($data)
    {
        return MysqlDatabase::insert('cloth',$data);
    }

    public function getCloth($id)
    {
        return MysqlDatabase::get_first('cloth','id',$id);
    }

    public function updateCloth($data,$id)
    {
        return MysqlDatabase::update('cloth',$data,$id);
    }
}