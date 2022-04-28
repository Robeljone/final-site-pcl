<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $db = db_connect();
        $sql = "SELECT * FROM blogs where statu='active'";
        $query=$db->query($sql);  
        $results = $query->getResult();
        $data['blogs'] = $results;
        return view('index',$data);
    }
}
