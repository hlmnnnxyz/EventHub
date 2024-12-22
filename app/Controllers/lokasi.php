<?php

namespace App\Controllers;

use App\Models\LokasiModel;

class Lokasi extends BaseController {
    protected $lokasiModel;

    public function __construct() {
        $this->lokasiModel = new LokasiModel();
    }

    public function index() {
        $data['lokasi'] = $this->lokasiModel->findAll();
        return view('admin/lokasi/index', $data);
    }

    public function create() {
        return view('admin/lokasi/create');
    }

    public function store() {
        $data = [
            'nama_lokasi' => $this->request->getPost('nama_lokasi'),
            'alamat_lokasi' => $this->request->getPost('alamat_lokasi'),
        ];

        $this->lokasiModel->save($data);
        return redirect()->to('/lokasi');
    }

    public function edit($id) {
        $data['lokasi'] = $this->lokasiModel->find($id);
        return view('admin/lokasi/edit', $data);
    }

    public function update($id) {
        $data = [
            'nama_lokasi' => $this->request->getPost('nama_lokasi'),
            'alamat_lokasi' => $this->request->getPost('alamat_lokasi'),
        ];

        $this->lokasiModel->update($id, $data);
        return redirect()->to('/lokasi');
    }

    public function delete($id) {
        $this->lokasiModel->delete($id);
        return redirect()->to('/lokasi');
    }
}
