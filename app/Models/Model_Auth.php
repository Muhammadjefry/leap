<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Auth extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $allowedFields = ['username', 'password'];

    protected $tableStudent = "student";
    protected $primaryKeyStudent = "id";
    protected $allowedFieldsStudent = ['nama', 'email', 'perusahaan', 'jenis_k'];


    // Fungsi untuk login
    public function login($username, $password)
    {
        return $this->db->table($this->table)->where([
            'username' => $username,
            'password' => $password,
        ])->get()->getRowArray();
    }

    // Fungsi untuk login Student
    public function login_student($nama, $email, $perusahaan, $jenis_k)
    {
        return $this->db->table($this->tableStudent)->where([
            'nama' => $nama,
            'email' => $email,
            'perusahaan' => $perusahaan,
            'jenis_k' => $jenis_k,
        ])->get()->getRowArray();
    }
}
