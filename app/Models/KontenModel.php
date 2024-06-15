<?php
namespace App\Models;

use CodeIgniter\Model;

class KontenModel extends Model
{
    protected $table      = 'konten';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'deskripsi', 'gambar'];
}

