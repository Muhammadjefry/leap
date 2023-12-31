<?php

namespace App\Controllers;
use App\Models\Model_Student;



class Home extends BaseController
{
    protected $studentModel;

    function __construct()
    {
        $this->studentModel = new Model_Student();
    }
    public function index()
    {
        $data['student'] = $this->studentModel->orderBy('id')->findAll();
        return view('v_home', $data);
    }
}
