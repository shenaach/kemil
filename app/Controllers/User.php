<?php
namespace App\Controllers;
class User extends BaseController{
    public function index(){
        $data = [
            'title' => 'Form Login',
            'tampil' => 'login',
        ];
        echo view('templates/wrapper', $data);
    }
}