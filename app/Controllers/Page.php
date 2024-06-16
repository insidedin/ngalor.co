<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TicketModel;
use App\Models\EventModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\ResponseInterface;

class Page extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('pages/home', $data);
    }

    public function login()
    {
        return view('pages/login');
    }

    public function konten()
    {
        $eventModel = new EventModel();
        $events = $eventModel->getAllEvents();
        $data = [
            'events' => $events
        ];
        return view('pages/konten', $data);
    }
    public function pesanan()
    {
        // Implementasi untuk menampilkan halaman pesanan
        return view('pages/pesanan');
    }

    public function pesan($event_id)
{
    $eventModel = new EventModel();
    $event = $eventModel->find($event_id);
    if (!$event) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Event dengan ID ' . $event_id . ' tidak ditemukan.');
    }
    $data = [
        'event' => $event
    ];
    return view('pages/pesan', $data);
}


public function storePesanan()
{
    $ticketModel = new TicketModel();
    $eventModel = new EventModel();

    $event_id = $this->request->getPost('event_id');
    $quantity = $this->request->getPost('quantity');

    // Mengambil data event berdasarkan event_id
    $event = $eventModel->find($event_id);
    if (!$event) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Event dengan ID ' . $event_id . ' tidak ditemukan.');
    }

    // Menghitung total harga
    $total_price = $event['price'] * $quantity;

    // Data untuk disimpan ke dalam tabel tickets
    $data = [
        'event_id' => $event_id,
        'email' => $this->request->getPost('email'),
        'quantity' => $quantity,
        'total_price' => $total_price,
        'order_date' => date('Y-m-d H:i:s')
    ];

    // Simpan data pesanan tiket ke dalam database menggunakan model TicketModel
    $ticketModel->save($data); // Pastikan method saveTicket sesuai dengan method save yang ada pada model TicketModel

    // Redirect ke halaman admin atau halaman konfirmasi
    return redirect()->to('/pageadmin/event/pesanan')->with('success', 'Pesanan tiket berhasil disimpan');
}

}
