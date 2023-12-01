<?php namespace App\Database\Seeds;
  
class Test extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_lengkap'  => 'Rahman Arsalan',
                'alamat'  =>  'Perumahan Limas',
                'email' => 'kuyarsal@gmail.com',
                'no_hp' => '0882007021334',
                'asal_sekolah' => 'SMAN 02 PEKALONGAN',
                'nominal' => '1000000'

            ]
          
          
        ];
        $this->db->table('daftar')->insertBatch($data);
    }
} 