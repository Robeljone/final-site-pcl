<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
class Slider extends BaseController
{ 
    public function delete($id)
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * from slider where id=?";
        $query=$db->query($sql, [$id]);  
        if($query)
        {
   $sql2 = "DELETE from slider where id=?";
   $query=$db->query($sql2, [$id]); 
   return redirect()->to(base_url('sliders')); 
        }
        else
        {
echo "test not";
        }
    }

    public function passive($id)
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * from slider where id=?";
        $query=$db->query($sql, [$id]);  
        if($query)
        {
   $sql2 = "UPDATE slider set statu='Passive' where id=?";
   $query=$db->query($sql2, [$id]); 
   return redirect()->to(base_url('sliders')); 
        }
        else
        {
echo "test not";
        }
    }
    public function active($id)
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * from slider where id=?";
        $query=$db->query($sql, [$id]);  
        if($query)
        {
   $sql2 = "UPDATE slider set statu='active' where id=?";
   $query=$db->query($sql2, [$id]); 
   return redirect()->to(base_url('sliders')); 
        }
        else
        {
echo "test not";
        }
    }
}