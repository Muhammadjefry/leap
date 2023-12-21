<?php

namespace App\Controllers;

class Menu extends BaseController
{
    protected $model;

    function __construct()
    {
        $this->model = new \App\Models\Model_Auth();
    }

    // Profile
    public function profile()
    {
        return view('layout/admin/v_profile');
    }


    // Add User
    public function add_user()
    {

        $data['user'] = $this->model->orderBy('id', 'asc')->findAll();
        $data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
        return view('layout/admin/v_add', $data);
    }

    // Participant
    public function participant()
    {

        $data['student'] = $this->model->orderBy('id')->findAll();
        $data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
        return view('layout/admin/v_participant', $data);
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

            $this->model->save($data);

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
        return json_encode($this->model->find($id));
    }

    // Hapus
    public function hapus($id)
    {
        $this->model->delete($id);
        return redirect()->to('menu/add_user');
    }
}
