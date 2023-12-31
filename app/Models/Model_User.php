<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_User extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $allowedFields = ['username', 'password'];

    // Fungsi untuk login
    public function login($username, $password)
    {
        return $this->db->table($this->table)->where([
            'username' => $username,
            'password' => $password,
        ])->get()->getRowArray();
    }


}
