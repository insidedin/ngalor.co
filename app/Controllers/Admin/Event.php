<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\EventModel;

class Event extends BaseController
{
    public function index()
    {
        $eventModel = new EventModel();
        $data['events'] = $eventModel->getAllEvents(); // Mendapatkan semua event dari database
        return view('pageadmin/event/index', $data);
    }

    public function showPesanan()
    {
        $ticketModel = new TicketModel();
        $data['tickets'] = $ticketModel->getAllTickets();
        return view('pageadmin/event/pesanan', $data);
    }

    public function create()
    {
        return view('pageadmin/event/create');
    }

    public function store()
    {
        $eventModel = new EventModel();

        // Ambil data dari form
$data = [
    'name' => $this->request->getPost('name'),
    'description' => $this->request->getPost('description'),
    'date' => $this->request->getPost('date'),
    'location' => $this->request->getPost('location'),
    'price' => $this->request->getPost('price'),
    'image' => $this->request->getPost('image'),
    'created_at' => date('Y-m-d H:i:s') // Tanggal saat ini
];

// Upload gambar jika diperlukan
$gambar = $this->request->getFile('image');

// Periksa apakah file berhasil diunggah
if ($gambar && $gambar->isValid() && ! $gambar->hasMoved()) {
    $newName = $gambar->getRandomName();
    $gambar->move(ROOTPATH . 'public/uploads', $newName);
    $data['image'] = $newName;
}

$eventModel = new EventModel();
$eventModel->saveEvent($data);

return redirect()->to('/pageadmin/event')->with('success', 'Event berhasil ditambahkan');

    }

    public function edit($id)
    {
        $eventModel = new EventModel();
        $data['event'] = $eventModel->find($id);
        return view('pageadmin/event/edit', $data);
    }

    public function update($id)
    {
        $eventModel = new EventModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'date' => $this->request->getPost('date'),
            'location' => $this->request->getPost('location'),
            'price' => $this->request->getPost('price'),
            'image' => $this->request->getPost('image'),
        ];

        // Upload gambar jika ada perubahan
        $gambar = $this->request->getFile('image');
        if ($gambar->isValid() && ! $gambar->hasMoved()) {
            $newName = $gambar->getRandomName();
            $gambar->move(ROOTPATH . 'public/uploads', $newName);
            $data['image'] = $newName;
        }

        $eventModel->updateEvent($id, $data);

        return redirect()->to('/pageadmin/event')->with('success', 'Event berhasil diperbarui');
    }

    public function delete($id)
    {
        $eventModel = new EventModel();
        $eventModel->deleteEvent($id);
        return redirect()->to('/pageadmin/event')->with('success', 'Event berhasil dihapus');
    }
}
