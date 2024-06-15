<?php
namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $table      = 'pengaduan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['perihal', 'deskripsi', 'pengadu', 'gambar', 'tanggal_pengaduan', 'status'];
}
