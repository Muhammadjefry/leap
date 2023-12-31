<?php

namespace App\Controllers;
// use App\Models\Model_Auth;
use App\Models\Model_User;
use App\Models\Model_Student;


class Menu extends BaseController
{
    protected $userModel;
    protected $studentModel;

    function __construct()
    {
        $this->userModel = new Model_User();
        $this->studentModel = new Model_Student();
    }


    // Add User
    public function add_user()
    {

        $data['user'] = $this->userModel->orderBy('id', 'asc')->findAll();
        return view('layout/admin/v_add', $data);
    }

    // Participant
    public function participant()
    {

        $data['student'] = $this->studentModel->orderBy('id')->findAll();
        return view('layout/admin/v_participant', $data);
    }


    public function detail($id)
    {
        // Lakukan sesuatu dengan $id, misalnya mengambil data dari database
        $studentModel = new \App\Models\Model_Student();
        $data['student'] = $studentModel->find($id);

        // Kemudian, tampilkan view v_participantScore dengan membawa data siswa
        return view('layout/admin/v_participantScore', $data);
    }


    // Profile
    public function profile()
    {
        return view('layout/admin/v_profile');
    }



    // Save Add
    public function add_save()
    {
        $validasi = \Config\Services::validation();
        $aturan = [
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => ['required' => '{field} harus diisi !!!']
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => ['required' => '{field} harus diisi !!!']
            ]
        ];

        $validasi->setRules($aturan);
        if ($validasi->withRequest($this->request)->run()) {

            $id = $this->request->getPost('id');
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $data = [
                'id' => $id,
                'username' => $username,
                'password' => $password,
            ];

            $this->userModel->save($data);

            $hasil['sukses'] = "Anda berhasil memasukan data";
            $hasil['eror'] = true;
        } else {

            $hasil['sukses'] = false;
            $hasil['eror'] = $validasi->listErrors();
        }

        return json_encode($hasil);
    }

    // Edit
    public function edit($id)
    {
        return json_encode($this->userModel->find($id));
    }

    // Hapus
    public function hapus($id)
    {
        $this->userModel->delete($id);
        return redirect()->to('menu/add_user');
    }
}
