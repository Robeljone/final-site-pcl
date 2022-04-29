<?php

namespace App\Controllers;

class Email extends BaseController
{
    public function index()
    {
        $this->load->library('email', NULL, 'ci_email');
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'robelict94@gmail.com',
            'smtp_pass' => 'G0di5+gr8',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        // Set to, from, message, etc.
        $result = $this->email->send();
    }
}