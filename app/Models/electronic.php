<?php
namespace App\Models;
require_once __DIR__ . "./../Database/MysqlDatabase.php";

use App\Database\MysqlDatabase;

class electronic
{
    public function createElectronic($data)
    {
        return MysqlDatabase::insert('electronic',$data);
    }

    public function getElectronic($id)
    {
        return MysqlDatabase::get_first('electronic','id',$id);
    }

    public function updateElectronic($data,$id)
    {
        return MysqlDatabase::update('electronic',$data,$id);
    }
}