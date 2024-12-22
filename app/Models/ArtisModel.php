<?php

namespace App\Models;
use CodeIgniter\Model;

class ArtisModel extends Model {
    protected $table = 'artis';
    protected $allowedFields = ['nama_artis', 'deskripsi_artis'];
}
