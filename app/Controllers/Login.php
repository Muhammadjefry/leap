<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('v_login', $data);
    }

    public function login_student()
    {
        $data = array(
            'title' => 'Login Student',
        );
        return view('v_login_student', $data);
    }
}
