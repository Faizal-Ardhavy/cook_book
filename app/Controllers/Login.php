<?php

namespace App\Controllers;

use App\Models\AkunModel;
use App\Models\ResepModel;

class Login extends BaseController
{
    public function index()
    
    {
        return view('Home/login');
    }

    public function process()
    
    {
        $users = new AkunModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $username,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('beranda'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to(base_url() . '/');
    }
}
