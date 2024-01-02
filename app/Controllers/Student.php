<?php

namespace App\Controllers;

class Student extends BaseController
{

    public function index()
    {
        return view('v_student');
    }


    // Controller: Student.php
    public function testing()
    {
        $btnValue = $this->request->getPost('btn_value');

        // Kirim nilai btn_value ke view
        $data['btnValue'] = $btnValue;

        return view('layout/student/testing', $data);
    }


    public function handleForm()
    {
        $downloadSpeed = $this->request->getPost('download_speed');
        $uploadSpeed = $this->request->getPost('upload_speed');
        $btnValue = $this->request->getPost('btn_value');

        // Ubah 10.0 sesuai dengan batasan yang diinginkan
        if ($downloadSpeed >= 10.0 && $uploadSpeed >= 10.0) {

            switch ($btnValue) {
                case 'btn_reading':
                    return redirect()->to(site_url('student/reading'));
                    break;
                case 'btn_listening':
                    return redirect()->to(site_url('student/listening'));
                    break;
                case 'btn_structure':
                    return redirect()->to(site_url('student/structure'));
                    break;
                case 'btn_speaking':
                    return redirect()->to(site_url('student/speaking'));
                    break;
                default:
                    // Tindakan default jika tidak ada yang cocok
                    return redirect()->to(site_url('student/default'));
            }
        } else {

            $data['btnValue'] = $btnValue;
            $data['downloadSpeed'] = $downloadSpeed;
            $data['uploadSpeed'] = $uploadSpeed;

            return view('layout/student/testing', $data);
        }
    }



    public function reading()
    {
        return view('layout/student/reading');
    }

    public function listening()
    {
        return view('layout/student/listening');
    }

    public function structure()
    {
        return view('layout/student/structure');
    }

    public function speaking()
    {
        return view('layout/student/speaking');
    }

    public function test()
    {
        return view('v_student');
    }
}
