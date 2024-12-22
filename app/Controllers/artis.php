<?php


namespace App\Controllers;

use App\Models\ArtisModel;

class Artis extends BaseController {
    protected $artisModel;

    public function __construct() {
        $this->artisModel = new ArtisModel();
    }

    public function index() {
        $data['artis'] = $this->artisModel->findAll();
        return view('admin/artis/daftar_artis', $data);
    }

    public function create() {
        return view('admin/artis/create_artis');
    }

    public function store() {
        $data = [
            'nama_artis' => $this->request->getPost('nama_artis'),
            'deskripsi_artis' => $this->request->getPost('deskripsi_artis'),
        ];

        $this->artisModel->save($data);
        return redirect()->to('/artis');
    }

    public function edit($id) {
        $data['artis'] = $this->artisModel->find($id);
        return view('admin/artis/edit_artis', $data);
    }

    public function update($id) {
        $data['nama_artis'] = $this->request->getPost('nama_artis');
        $data['deskripsi_artis'] = $this->request->getPost('deskripsi_artis');

        $this->artisModel->update($id, $data);
        return redirect()->to('/artis');
    }

    public function delete($id) {
        $this->artisModel->delete($id);
        return redirect()->to('/artis');
    }
}
