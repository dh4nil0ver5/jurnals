<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Users extends Model{
  protected $DBGroup           = 'default';
  protected $table             = 'user';
  protected $allowedFields     = [ 'username','userpassword','useremail',
    'status','nama_foto','alamat_foto','level_id','create_at'];
  
    public function getUser(){
        $query = $this->db->query("select * from user");
        return $query;
    }
}