<?php

namespace App\Controllers;

use App\Models\M_Users;

class Admin extends BaseController{
    public function index(){
        $session = session();
        $m_users = new M_Users();
        $data_user = $m_users->getUser()->getResult();
        $data = ["user"=>$data_user];
        print_r($data);
        return view('admin/index', $data);
    } 
}