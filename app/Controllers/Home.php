<?php

namespace App\Controllers;

use App\Models\M_Users;

class Home extends BaseController{
    public function index()
    {
        return view('welcome_message');
    }
    // 
    public function AuthLogin(){
        $session = session();
        $data = [];
        if($session->get('level_id') == null){
            $data = ['pesan','Welcome back again !'];
            return view('login', $data);
        }else{
            return view('login', $data);
        }
    }
}
