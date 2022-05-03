<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
class Gallery extends BaseController
{ 
    public function delete($id)
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * from gallery where id=?";
        $query=$db->query($sql, [$id]);  
        if($query)
        {
   $sql2 = "DELETE from gallery where id=?";
   $query=$db->query($sql2, [$id]); 
   return redirect()->to(base_url('gallery')); 
        }
        else
        {
echo "test not";
        }
    }

    public function passive($id)
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * from gallery where id=?";
        $query=$db->query($sql, [$id]);  
        if($query)
        {
   $sql2 = "UPDATE gallery set statu='Passive' where id=?";
   $query=$db->query($sql2, [$id]); 
   return redirect()->to(base_url('gallery')); 
        }
        else
        {
echo "test not";
        }
    }
    public function active($id)
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * from gallery where id=?";
        $query=$db->query($sql, [$id]);  
        if($query)
        {
   $sql2 = "UPDATE gallery set statu='active' where id=?";
   $query=$db->query($sql2, [$id]); 
   return redirect()->to(base_url('gallery')); 
        }
        else
        {
echo "test not";
        }
    }
}