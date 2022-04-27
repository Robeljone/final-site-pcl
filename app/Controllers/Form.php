<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
class Form extends BaseController
{
    public function adduser()
    {
        return view('index');
    }
    public function addblog()
    {
        $db = \Config\Database::connect();
        $fname = $this->request->getVar('fname');
        $blogtitle = $this->request->getVar('blogtitle');
        $file = $this->request->getFile('cover');
        $content = $this->request->getVar('content');
        $imagename=$file->getName();
        $file->move('public/images', $imagename);
        $sql = "INSERT INTO blogs( posted_by, title, content, images, statu) VALUES (?,?,?,?,?)";
        $query=$db->query($sql, [$fname,$blogtitle,$content,$imagename,'active']);  
        if($query)
        {
            return redirect()->to(base_url('blogs')); 
        }else
        {
            echo '<script>alert("Query not successfull")</script>';
            return redirect()->to(base_url('dashboard')); 
        }
        return view('index');
    }
    public function addslider()
    {
        $db = \Config\Database::connect();
        $title = $this->request->getVar('title');
        $file = $this->request->getFile('slide');
        $imagename=$file->getName();
        $file->move('public/images', $imagename);
        $sql = "INSERT INTO slider( title,images, statu) VALUES (?,?,?)";
        $query=$db->query($sql, [$title,$imagename,'active']);  
        if($query)
        {
            return redirect()->to(base_url('sliders')); 
        }else
        {
            echo '<script>alert("Query not successfull")</script>';
            return redirect()->to(base_url('dashboard')); 
        }
    }
    public function addgallery()
    {
        return view('index');
    }

}
