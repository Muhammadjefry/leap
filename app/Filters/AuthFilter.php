<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (!session()->get('logg') && !session()->get('log')) {
            session()->setFlashdata('pesan', 'Anda Belum Login, Silahkan Login Dulu ..!!!');

            // Cek session individu dan arahkan ke halaman yang sesuai
            if (!session()->get('logg')) {
                // Jika tidak ada session 'logg', arahkan ke halaman login_student
                return redirect()->to(base_url('auth/login_student'));
            } elseif (!session()->get('log')) {
                // Jika tidak ada session 'log', arahkan ke halaman login
                return redirect()->to(base_url('auth/login'));
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //Do something here
        if (session()->get('logg') == true) {
            return redirect()->to(base_url('student'));
        } elseif (session()->get('log') == true) {
            return redirect()->to(base_url('home'));
        }
    }
}
