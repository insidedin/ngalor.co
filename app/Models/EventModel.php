<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'date', 'location', 'price', 'image', 'created_at'];

    // Method untuk mendapatkan semua event
    public function getAllEvents()
    {
        return $this->findAll();
    }

    // Method untuk menyimpan event baru
    public function saveEvent($data)
    {
        return $this->insert($data);
    }

    // Method untuk mengupdate event berdasarkan ID
    public function updateEvent($id, $data)
    {
        return $this->update($id, $data);
    }

    // Method untuk menghapus event berdasarkan ID
    public function deleteEvent($id)
    {
        return $this->delete($id);
    }
}
