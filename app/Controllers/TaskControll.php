<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MentorModel;
use App\Models\ModelBimbel;
use App\Models\TestiModel;
class TaskControll extends BaseController
{
    protected $mentormodel;
    protected $bimbelmodel;
    protected $testimodel;
    public function __construct()
    {
        $this->mentormodel = new MentorModel();
        $this->bimbelmodel = new ModelBimbel();
        $this->testimodel = new TestiModel();

    }
    public function index()
    {
        $tombolcari = $this->request->getPost('tombolcari');
        if (isset($tombolcari)) {
            $cari = $this->request->getPost('cari');
            redirect()->to('/Mentor/index');
        } else {
            $cari = session()->get('cari_judul');
        }

        $datamentor = $cari ? $this->mentormodel->cariData($cari) ->paginate(5, 'mentor') : $this->mentormodel->paginate(5, 'mentor');

        $nohalaman = $this->request->getVar('page_buku') ? $this->request->getVar('page_buku') :1;
 $data=[
    'mentor' => $datamentor,
    'pager' => $this->mentormodel->pager,
    'nohalaman' =>$nohalaman,
];
return view('Mentor/index', $data);
       
    }
    public function mentor(){
        $tampil = $this->mentormodel->findAll();
        $data = ['mentor'=> $tampil];
    return view('Users/mentor',$data);
    }
    public function simpan()
    {
        
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[mentor.nama]',
                'errors' => [
                    'required' => 'Nama Mentor  harus di isi.',
                    'is_unique' => 'Nama Mentor  sudah terdaftar'
                ]
                
                ],
           
                'pelajaran' => [
                    'rules' => 'required[mentor.pelajaran]',
                    'errors' => [
                        'required' => 'Mapel  harus di isi.',
                    ]
                    
                    
                    ],
                    'jampel' => [
                        'rules' => 'required[mentor.jampel]',
                        'errors' => [
                            'required' => 'Jam pelajar Mentor  harus di isi.',
                        ]
                        
                        
                        ],
                        'materi' => [
                            'rules' => 'required[mentor.materi]',
                            'errors' => [
                                'required' => 'Materi Harus Di isi  harus di isi.',
                            ]
                            
                            
                            ],
                        'foto_mentor' => [
                            'rules' => 'uploaded[foto_mentor]|max_size[foto_mentor,1024]|is_image[foto_mentor]',
                            'errors' => [
                                'uploaded' => 'Foto mentor harus diunggah.',
                                'max_size' => 'Ukuran foto  tidak boleh melebihi 1 MB.',
                                'is_image' => 'File yang diunggah harus berupa gambar.',
                            ]
                            
                            
                            ],
                     
                      
        ]
        )) {
            $validation = \Config\Services::validation();
            return redirect()->to('/TaskControll/Create')->withInput()->with('validation', $validation->getErrors());
        }
          $alias = url_title($this->request->getVar('nama'), '-', true);
$nama_lengkap = $this->request->getVar('nama');
$pelajaran = $this->request->getVar('pelajaran');
$jampel = $this->request->getVar('jampel');
$foto = $this->request->getFile('foto_mentor');
$materi = $this->request->getVar('materi');
$namafoto = $foto->getRandomName();
$foto->move(ROOTPATH . 'public/hasil', $namafoto);
        $data = ['nama' => $nama_lengkap,
                 'pelajaran' => $pelajaran,
                 'jampel' => $jampel,
                 'alias' => $alias,
                 'foto_mentor' => $namafoto,
                 'materi'=> $materi,
                
               
                
                
    ];
    $this->mentormodel->save($data);
        return redirect()->to('/TaskControll')->with('berhasil', 'Mentor Telah Di tambahkan');
    
    }
    public function Create(){  

        return view('Mentor/create');
            }
            public function delete($id)
            {
                $this->mentormodel->delete($id);
                return redirect()->to('/TaskControll')->with('berhasil', 'Data Mentor Berhasil Di Hapus');
            }
        
            public function update($id)
            {
                $this->mentormodel->save([
                    'nama'     => $this->request->getVar('nama'),
                    'id'      => $id,
                    'pelajaran'   => $this->request->getVar('pelajaran'),
                    'jampel'  => $this->request->getVar('jampel'),
                    'materi'=> $this->request->getVar('materi'),

                ]);
                return redirect()->to('/TaskControll')->with('berhasil', 'Data Mentor Berhasil Di Update');
             }
             public function formedit($alias)
             {
                 $data = [
                     'validation' => \Config\Services::validation(),
                     'mentor' => $this->mentormodel->getmentor($alias)
                 ];
         
                 return view('Mentor/edit', $data);
              
             }
    public function Testi(){
        $tampildata = $this->testimodel->findAll();
        $data = ['tampil' => $tampildata];
        return view('Users/testi',$data);
    }
    public function about(){
        return view('Users/about');
    }
    public function Penilaian (){
$tampildata = $this->testimodel->findAll();

$data = ['tampildata' => $tampildata];

return view('Admin/nilai',$data);
    }
    public function detail($alias){
$detailmentor = $this->mentormodel->getmentor($alias);
$data = ['tampildata' => $detailmentor];
return view('Mentor/detail',$data);
    }
}
