<?php
namespace App\Controllers;

use App\Models\KontenModel;
use CodeIgniter\Controller;

class Konten extends Controller
{
    public function index()
    {
        $model = new KontenModel();
        $data['konten'] = $model->findAll();
        return view('konten/index', $data);
    }

    public function create()
    {
        return view('konten/create');
    }

    public function store()
    {
        $model = new KontenModel();

        $data = [
            'title' => $this->request->getPost('title'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $this->request->getPost('gambar'),
        ];

        $model->save($data);
        return redirect()->to('/konten');
    }

    public function edit($id)
    {
        $model = new KontenModel();
        $data['konten'] = $model->find($id);
        return view('konten/edit', $data);
    }

    public function update($id)
    {
        $model = new KontenModel();

        $data = [
            'title' => $this->request->getPost('title'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $this->request->getPost('gambar'),
        ];

        $model->update($id, $data);
        return redirect()->to('/konten');
    }

    public function delete($id)
    {
        $model = new KontenModel();
        $model->delete($id);
        return redirect()->to('/konten');
    }
}
