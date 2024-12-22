<?php

namespace App\Models;
use CodeIgniter\Model;

class KonserModel extends Model {
    protected $table = 'konser';
    protected $allowedFields = ['judul_konser', 'deskripsi', 'tanggal', 'harga', 'gambar_konser', 'artis_konser', 'lokasi_konser'];
}
