<?php

namespace App\Models;
use CodeIgniter\Model;

class LokasiModel extends Model {
    protected $table = 'lokasi';
    protected $allowedFields = ['nama_lokasi', 'alamat_lokasi'];
}
