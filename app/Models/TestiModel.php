<?php

namespace App\Models;
use CodeIgniter\Model;

class TestiModel extends Model
{
    protected $table            = 'testi';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['rating','id_daftar','pesan','foto_siswa'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
   
        
        
    public function joinTodaftar()
    {
        return $this->join('daftar', 'daftar.id=testi.id');
        
    }

}
   

