<?php

namespace App\Controllers;

use App\Models\KonserModel;
use App\Models\ArtisModel;
use App\Models\LokasiModel;

class Admin extends BaseController {
    protected $konserModel;
    protected $artisModel;
    protected $lokasiModel;

    public function __construct() {
        $this->konserModel = new KonserModel();
        $this->artisModel = new ArtisModel();
        $this->lokasiModel = new LokasiModel();
    }

    public function dashboard() {
        $data['konser'] = $this->konserModel->findAll();
        $data['artis'] = $this->artisModel->findAll();
        $data['lokasi'] = $this->lokasiModel->findAll();
        return view('admin/dashboard', $data);
    }

    public function create_konser() {
        $data['artis'] = $this->artisModel->findAll();
        $data['lokasi'] = $this->lokasiModel->findAll();
        return view('admin/create_konser', $data);
    }

    public function store_konser() {
        $file = $this->request->getFile('gambar_konser');
        $file->move('uploads');

        $data = [
            'judul_konser' => $this->request->getPost('judul_konser'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tanggal' => $this->request->getPost('tanggal'),
            'harga' => $this->request->getPost('harga'),
            'gambar_konser' => $file->getName(),
            'artis_konser' => implode(',', $this->request->getPost('artis_konser')),
            'lokasi_konser' => $this->request->getPost('lokasi_konser'),
        ];

        $this->konserModel->save($data);
        return redirect()->to('/admin/dashboard');
    }

    public function edit_konser($id) {
        $data['konser'] = $this->konserModel->find($id);
        $data['artis'] = $this->artisModel->findAll();
        $data['lokasi'] = $this->lokasiModel->findAll();
        return view('admin/edit_konser', $data);
    }

    public function update_konser($id) {
        $file = $this->request->getFile('gambar_konser');
        if ($file->isValid() && !$file->hasMoved()) {
            $file->move('uploads');
            $data['gambar_konser'] = $file->getName();
        }

        $data['judul_konser'] = $this->request->getPost('judul_konser');
        $data['deskripsi'] = $this->request->getPost('deskripsi');
        $data['tanggal'] = $this->request->getPost('tanggal');
        $data['harga'] = $this->request->getPost('harga');
        $data['artis_konser'] = implode(',', $this->request->getPost('artis_konser'));
        $data['lokasi_konser'] = $this->request->getPost('lokasi_konser');

        $this->konserModel->update($id, $data);
        return redirect()->to('/admin/dashboard');
    }

    public function delete_konser($id) {
        $this->konserModel->delete($id);
        return redirect()->to('/admin/dashboard');
    }
}
