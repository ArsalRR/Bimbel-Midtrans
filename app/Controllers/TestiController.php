<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TestiModel;
use App\Models\MentorModel;


class TestiController extends BaseController
{
    protected $testimodel;
    protected $mentormodel;
    public function __construct(){
        $this->testimodel = new TestiModel();
        $this->mentormodel = new MentorModel ();
    }

    public function index()
    {
        return view('Testi/index');
    }
    public function Create(){
        $tampildata = $this->testimodel->findAll(); 
       
        $data =['tampil'=> $tampildata,
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
                    'nama_siswa' => [
                        'rules' => 'required|is_unique[testi.nama_siswa]',
                        'errors' => [
                            'required' => 'Nama Lengkap nama harus di isi.',
                            'is_unique' => 'Kamu Sudah Memberi masukkan Terima Kasih'
                        ]
                        
                        ],
      
       
            
                  
        ]
        )) {
            $validation = \Config\Services::validation();
            return redirect()->to('TestiController/Create')->withInput()->with('validation', $validation->getErrors());
        }
        $pesan = $this->request->getVar('pesan');
        $rating = $this->request->getVar('rating');
        $nama_siswa = $this->request->getVar('nama_siswa');
        $data = ['pesan'=>$pesan,
    'nama_siswa'=>$nama_siswa,
'rating'=>$rating];
$this->testimodel->save($data);
return redirect()->to('/TestiController')->with('berhasil', 'Terima kasih ');

    }
    public function JadwalBimbel(){
        $tampildata = $this->mentormodel->findAll();
     
        $data = ['tampil' => $tampildata];
        return view('Testi/Jadwal',$data);

    }


}
