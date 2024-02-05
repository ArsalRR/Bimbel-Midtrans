<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TestiModel;
use App\Models\ModelBimbel;
use App\Models\MentorModel;


class TestiController extends BaseController
{
    protected $testimodel;
    protected $bimbelmodel;
    protected $mentormodel;
    public function __construct(){
        $this->testimodel = new TestiModel();
        $this->bimbelmodel = new  ModelBimbel();
        $this->mentormodel = new  MentorModel();
    }

    public function index()
    {
        return view('Testi/index');
    }
    public function Create(){
        $tampildata = $this->testimodel->joinTodaftar()->findAll();
        $bimbelmodel = new ModelBimbel();
        $data =['tampil'=> $tampildata,
        'bimbelmodel'=>$bimbelmodel->findAll()
];
return view('Testi/create',$data);

    }
    public function simpan(){
        if (!$this->validate([
            'pesan' => [
                'rules' => 'required[testi.pesan]',
                'errors' => [
                    'required' => 'Asal Sekolah   harus di isi.',
                ]
                
                
                ],
                'rating' => [
                    'rules' => 'required[testi.rating]',
                    'errors' => [
                        'required' => 'Nominal  harus di isi.',
                    ]
                    
                    
                    ],
                    'id_daftar' => [
                        'rules' => 'required|is_unique[testi.id_daftar]',
                        'errors' => [
                            'required' => 'Nama Lengkap nama harus di isi.',
                            'is_unique' => 'Kamu Sudah Memberi masukkan Terima Kasih'
                        ]
                        
                        ],
                        'foto_siswa' => [
                            'rules' => 'uploaded[foto_siswa]|max_size[foto_siswa,1024]|is_image[foto_siswa]',
                            'errors' => [
                                'uploaded' => 'Foto mentor harus diunggah.',
                                'max_size' => 'Ukuran foto  tidak boleh melebihi 1 MB.',
                                'is_image' => 'File yang diunggah harus berupa gambar.',
                            ]
                            
                            
                            ],
                     
      
       
            
                  
        ]
        )) {
            $validation = \Config\Services::validation();
            return redirect()->to('TestiController/Create')->withInput()->with('validation', $validation->getErrors());
        }
        $pesan = $this->request->getVar('pesan');
        $rating = $this->request->getVar('rating');
        $id_daftar = $this->request->getVar('id_daftar');
        $foto = $this->request->getFile('foto_siswa');
        $foto_siswa = $foto->getRandomName();
        $foto->move(ROOTPATH . 'public/hasil', $foto_siswa);
        $data = ['pesan'=>$pesan,
    'id_daftar'=>$id_daftar,
'rating'=>$rating,
'foto_siswa'=>$foto_siswa];

$this->testimodel->save($data);
return redirect()->to('/TestiController')->with('berhasil', 'Terima kasih ');

    }
    public function JadwalBimbel(){
        $tampildata = $this->mentormodel->findAll();
     
        $data = ['tampil' => $tampildata];
        return view('Testi/Jadwal',$data);

    }


}
