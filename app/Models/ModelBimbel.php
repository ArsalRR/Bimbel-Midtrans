<?php
namespace App\Models;
use CodeIgniter\Model;
class ModelBimbel extends Model
{
   
    protected $table            = 'daftar';
    protected $allowedFields    = [
        'nama_lengkap', 'alamat','email','no_hp','asal_sekolah','nominal','bukti_trasfer','alias','token','id_order','status','id_mentor','tipe_bimbel'];

    public function cariData($cari)
    {
        return $this->table('daftar')->like('nama_lengkap', $cari);
    }
    public function getsiswa($alias = false)
    {
     
        if ($alias == false) {
            return $this->findAll();
        }
        return $this->where(['alias' => $alias])->first();
    }
    public function joinToMentor()
    {
        return $this->join('mentor', 'mentor.id=daftar.id')->select('mentor.nama,mentor.pelajaran,daftar.nama_lengkap,daftar.alamat,daftar.asal_sekolah,daftar.email,daftar.id,daftar.nominal');
        
    }
    public function getTotalNominal()
    {
        return $this->db->table($this->table)->selectSum('nominal')->get()->getRow()->nominal;
    }
 

}
