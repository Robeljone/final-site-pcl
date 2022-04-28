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
       
        $sql2 = "SELECT * FROM gallery where statu='active'";
        $query=$db->query($sql2);  
        $results2 = $query->getResult();

        $sql3 = "SELECT * FROM slider where statu='active'";
        $query=$db->query($sql3);  
        $results3 = $query->getResult();

        $data['blogs'] = $results;
        $data['gallery'] = $results2;
        $data['slider'] = $results3;
        return view('index',$data);
    }
}
