<?php

namespace App\Models;

use CodeIgniter\Model;

class TicketModel extends Model
{
    protected $table = 'tickets';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'event_id', 'quantity', 'total_price', 'order_date'];
    // Metode untuk mendapatkan semua pesanan
    public function getAllTickets()
    {
        return $this->findAll();
    }
    public function saveTicket($data)
    {
        return $this->insert($data);
    }
}
