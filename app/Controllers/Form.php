<?php

namespace App\Controllers;
use CodeIgniter\Files\File;
class Form extends BaseController
{
    public function adduser()
    {
        $db = \Config\Database::connect();
        $fname = $this->request->getVar('fname');
        $uname = $this->request->getVar('uname');
        $pass = $this->request->getVar('passw');
        $hash = openssl_encrypt($pass, "AES-128-ECB", "amanisthebest");
        $sql = "INSERT INTO user( FullName,username,pass,statu) VALUES (?,?,?,?)";
        $query=$db->query($sql, [$fname,$uname,$hash,'active']);  
        if($query)
        {
            return redirect()->to(base_url('users')); 
        }else
        {
            echo '<script>alert("Query not successfull")</script>';
            return redirect()->to(base_url('dashboard')); 
        }
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
        $file->move('images/uploads', $imagename);
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
    public function bookapp()
    {
    $email = \Config\Services::email();
    $email->setFrom('test@gmail.com', 'Robel Yohannes');
    $email->setTo('robelict94@gmail.com');
    $email->setSubject('Booking Appointment');
    $email->setMessage('Testing the email class.');
    $email->send();
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
        $db = \Config\Database::connect();
        $title = $this->request->getVar('title');
        $file = $this->request->getFile('cover');
        $imagename=$file->getName();
        $file->move('images/uploads/gallery', $imagename);
        $sql = "INSERT INTO gallery( title,images, statu) VALUES (?,?,?)";
        $query=$db->query($sql, [$title,$imagename,'active']);  
        if($query)
        {
            return redirect()->to(base_url('gallery')); 
        }else
        {
            echo '<script>alert("Query not successfull")</script>';
            return redirect()->to(base_url('dashboard')); 
        }
        return view('index');
    }

}