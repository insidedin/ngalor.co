<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('pageadmin/login');
    }

public function loginSubmit()
{
    $session = session();
    $userModel = new UserModel();
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');

    if (!$username || !$password) {
        $session->setFlashdata('msg', 'Username dan Password harus diisi');
        return redirect()->to('/login');
    }

    $user = $userModel->getUserByUsername($username);

    if ($user) {
        if (password_verify($password, $user['PASSWORD'])) {
            $session->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'logged_in' => true,
            ]);

            if ($user['username'] === 'admin') {
                return redirect()->to('/pageadmin');
            }
        } else {
            $session->setFlashdata('msg', 'Password salah');
            return redirect()->to('/login');
        }
    } else {
        $session->setFlashdata('msg', 'Username tidak ditemukan');
        return redirect()->to('/login');
    }
}

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}

