<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function blogs()
    {
        $db = \Config\Database::connect();
        $db = db_connect();
        $sql = "SELECT * FROM blogs";
        $query=$db->query($sql);  
        $results = $query->getResult();
        $data['list'] = $results;
        return view('admin/blogs',$data);
    }
    public function sliders()
    {
        $db = \Config\Database::connect();
        $db = db_connect();
        $sql = "SELECT * FROM slider";
        $query=$db->query($sql);  
        $results = $query->getResult();
        $data['list'] = $results;
        return view('admin/sliders',$data);
    }
    public function gallery()
    {
        $db = \Config\Database::connect();
        $db = db_connect();
        $sql = "SELECT * FROM gallery";
        $query=$db->query($sql);  
        $results = $query->getResult();
        $data['list'] = $results;
        return view('admin/gallery',$data);
    }
    public function users()
    {
        $db = \Config\Database::connect();
        $db = db_connect();
        $sql = "SELECT * FROM user";
        $query=$db->query($sql);  
        $results = $query->getResult();
        $data['list'] = $results;
        return view('admin/users',$data);
    }
    public function signout()
    {
        return view('admin/index');
    }
    public function auth()
    {
        session_start();

        $email = $this->request->getVar('uname');
        $password = $this->request->getVar('password');
        $hash = openssl_encrypt($password, "AES-128-ECB", "amanisthebest");
        $db = \Config\Database::connect();
        $db = db_connect();
        $sql = "SELECT * FROM user WHERE (username=? AND pass=? AND statu='active')";
        $query=$db->query($sql, [$email,$hash]);  
        $results = $query->getResult();
        
       if(count((array)$results)>0){
        $_SESSION["isuser"]=true;
        $_SESSION["user"]=$results;
        $_SESSION["time"]=date("Y-m-d h:i:s A",strtotime('+30 minutes'));
        return redirect()->to(base_url('dashboard')); 
       }else{
        $_SESSION["isuser"]=false;
        $_SESSION["error"]="User name OR Password incorect";
        return redirect()->to(base_url('admin'));
       }
    }

}