<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    public function indexuser()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll(); // Using findAll() to get all users
        return view('pageadmin/users/indexuser', $data);
    }

    public function create()
    {
        return view('pageadmin/users/create');
    }

    public function store()
    {
        $userModel = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $userModel->save($data);

        return redirect()->to('/pageadmin/users/indexuser')->with('success', 'User berhasil ditambahkan');
    }

    public function edit($id)
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->find($id);
        return view('pageadmin/users/edit', $data);
    }

    public function update($id)
    {
        $userModel = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $userModel->update($id, $data);

        return redirect()->to('/pageadmin/users/indexuser')->with('success', 'User berhasil diperbarui');
    }

    public function delete($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);
        return redirect()->to('/pageadmin/users/indexuser')->with('success', 'User berhasil dihapus');
    }
}
