<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'PASSWORD'];

    public function getAllUsers()
    {
        return $this->findAll();
    }

    public function saveUser($data)
{
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    return $this->insert($data);
}


    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteUser($id)
    {
        return $this->delete($id);
    }

public function getUserByUsername($username)
{
    return $this->select('id, username, email, PASSWORD')->where('username', $username)->first();
}


}

