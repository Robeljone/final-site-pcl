<?php

namespace App\Controllers;

class Read extends BaseController
{
    public function index($id)
    {
        $db = \Config\Database::connect();
        $db = db_connect();
        $sql = "SELECT title,content,images,dates FROM blogs where id=? ";
        $query=$db->query($sql,[$id]);  
        $results = $query->getResult();
        $data['blogs'] = $results;
        return view('read',$data);
    }

    
}
