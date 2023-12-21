<?php

namespace App\Controllers;

class Student extends BaseController
{
    protected $model;

    function __construct()
    {
        $this->model = new \App\Models\Model_Auth();
    }


    public function index()
    {
        return view('v_student');
    }

    // Participant
    public function participant()
    {
        $data['user'] = $this->model->orderBy('id')->findAll();
        $data['nomor'] = ($this->request->getVar('page') == 1) ? '0' : $this->request->getVar('page');
        return view('layout/admin/v_participant', $data);
    }


    public function testing()
    {
        return view('layout/student/testing');
    }
}
