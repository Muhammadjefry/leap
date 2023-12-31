<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Student extends Model
{
    protected $table = "student";
    protected $primaryKey = "id";
    protected $allowedFields = ['nama', 'email', 'perusahaan', 'jenis_k'];


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
