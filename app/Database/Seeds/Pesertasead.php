<?php namespace App\Database\Seeds;
  
class Pesertasead extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_lengkap'  => 'arsal',
                'alamat'  =>  'Perumahan Limas',
                'email' => 'kuyarsal@gmail.com',
                'no_hp' => '0882007021334',
                'asal_sekolah' => 'SMAN 02 PEKALONGAN',
                'nominal' => '1000000'

            ],
            [
                'nama_lengkap'  => 'Akmal',
                'alamat'  =>  'Perumahan tirto',
                'email' => 'kuyakmal@gmail.com',
                'no_hp' => '0882007021776',
                'asal_sekolah' => 'SMK 02 PEKALONGAN',
                'nominal' => '2000000'
            ],

            [
                'nama_lengkap'  => 'Iwan',
                'alamat'  =>  'Perumahan tirto raya',
                'email' => 'kuyiwan@gmail.com',
                'no_hp' => '088200707666',
                'asal_sekolah' => 'SMK 04 PEKALONGAN',
                'nominal' => '2000000'
            ],
            [
                'nama_lengkap'  => 'Kukuh',
                'alamat'  =>  'Perumahan Panjang',
                'email' => 'kuykukuh@gmail.com',
                'no_hp' => '088200702776655',
                'asal_sekolah' => 'SMA 03 PEKALONGAN',
                'nominal' => '2000000'
            ],
            [
                'nama_lengkap'  => 'Bandi',
                'alamat'  =>  'Perumahan Harmony',
                'email' => 'kuybandi@gmail.com',
                'no_hp' => '08820070218877',
                'asal_sekolah' => 'SMK 05 PEKALONGAN',
                'nominal' => '2000000'
            ],
            [
                'nama_lengkap'  => 'Misrodah',
                'alamat'  =>  'Perumahan Binagriya',
                'email' => 'kuymis@gmail.com',
                'no_hp' => '08820070217665544',
                'asal_sekolah' => 'SMK 01 PEKALONGAN',
                'nominal' => '2000000'
            ],
            [
                'nama_lengkap'  => 'Kuwat',
                'alamat'  =>  'Perumahan Wiradesa',
                'email' => 'kuywat@gmail.com',
                'no_hp' => '088200702176699877',
                'asal_sekolah' => 'SMK 03 PEKALONGAN',
                'nominal' => '2000000'
            ],
          
          
        ];
        $this->db->table('daftar')->insertBatch($data);
    }
} 