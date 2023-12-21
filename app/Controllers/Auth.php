<?php
//  belajar update git // ubah lage // coba ubah lagi bre
namespace App\Controllers;

use App\Models\Model_Auth; // Pastikan ini sesuai dengan nama file model

class Auth extends BaseController
{
    protected $Model_Auth; // Gunakan properti yang benar

    public function __construct()
    {
        helper('form');
        $this->Model_Auth = new Model_Auth();
    }


    // // Login
    public function login()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('v_login', $data);
    }

    // // Login Student
    public function login_student()
    {
        $data = array(
            'title' => 'Login Student',
        );
        return view('v_login_student', $data);
    }

    // // Cek Login
    public function cek_login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => ['required' => '{field} Wajib Diisi dan tidak boleh kosong !!!']
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => ['required' => '{field} Wajib Diisi dan tidak boleh kosong !!!']
            ],
        ])) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $cek = $this->Model_Auth->login($username, $password);
            if ($cek) {
                // Jika data cocok
                session()->set('log', true);
                session()->set('username', $cek['username']);
                session()->set('password', $cek['password']);
                session()->set('level', $cek['level']);

                // Berhasil
                return redirect()->to(base_url('home/index'));
            } else {
                // Jika tidak cocok
                session()->setFlashdata('pesan',   'Gagal Login !!, Coba periksa kembali username dan password anda !');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            // Jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('username');
        session()->remove('password');
        session()->remove('level');

        // Logout Succes

        return redirect()->to(base_url('auth/login'));
    }

    public function logout_student()
    {
        session()->remove('logg');
        session()->remove('nama');
        session()->remove('email');
        session()->remove('perusahaan');
        session()->remove('jenis_k');

        // Logout Succes

        return redirect()->to(base_url('auth/login_student'));
    }

    // Cek Login Student
    public function cek_login_student()
    {
        if ($this->validate([
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => ['required' => '{field} Wajib Diisi Sesuai KTP !!!']
            ],
            'email' => [
                'label' => 'E-mail',
                'rules' => 'required',
                'errors' => ['required' => '{field} Wajib Diisi dan tidak boleh kosong !!!']
            ],
            'perusahaan' => [
                'label' => 'Perusahaan',
                'rules' => 'required',
                'errors' => ['required' => '{field} Wajib Diisi dan tidak boleh kosong !!!']
            ],
            'jenis_k' => [
                'label' => 'Jenis Kelamin',
                'rules' => 'required',
                'errors' => ['required' => '{field} Wajib Diisi dan tidak boleh kosong !!!']
            ],
        ])) {
            $nama = $this->request->getPost('nama');
            $email = $this->request->getPost('email');
            $perusahaan = $this->request->getPost('perusahaan');
            $jenis_k = $this->request->getPost('jenis_k');

            $cek2 = $this->Model_Auth->login_student($nama, $email, $perusahaan, $jenis_k);
            if ($cek2) {
                // Jika data cocok
                session()->set('logg', true);
                session()->set('nama', $cek2['nama']);
                session()->set('email', $cek2['email']);
                session()->set('perusahaan', $cek2['perusahaan']);
                session()->set('jenis_k', $cek2['jenis_k']);

                // Jika  cocok
                return redirect()->to(base_url('student'));
            } else {
                // Jika tidak cocok
                session()->setFlashdata('pesan', 'Gagal Login !!, Coba periksa kembali data anda !');
                return redirect()->to('auth/login_student');
            }
        } else {
            // Jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('auth/login_student');
        }
    }
}
