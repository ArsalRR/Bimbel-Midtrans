<?php

namespace App\Models;

use CodeIgniter\Model;

class TestiModel extends Model
{
    protected $table            = 'testi';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['rating','nama_siswa','pesan'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}
   

