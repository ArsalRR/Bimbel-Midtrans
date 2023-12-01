<?php

namespace App\Controllers;

use App\Models\ModelBimbel;
use App\Models\MentorModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Rangking extends BaseController
{
    protected $bimbelmodel;
    public function __construct()
    {
        $this->bimbelmodel = new ModelBimbel();

    }

    public function index()
    {
        $tombolcari = $this->request->getPost('tombolcari');
        if (isset($tombolcari)) {
            $cari = $this->request->getPost('cari');
            redirect()->to('/Admin/index');
        } else {
            $cari = session()->get('cari_judul');
        }

        $datasiswa = $cari ? $this->bimbelmodel->cariData($cari) ->paginate(5, 'daftar') : $this->bimbelmodel->paginate(5, 'daftar');

        $nohalaman = $this->request->getVar('page_buku') ? $this->request->getVar('page_buku') :1;
        
 $data=[
    'siswa' => $datasiswa,
    'pager' => $this->bimbelmodel->pager,
    'nohalaman' =>$nohalaman,
];
return view('Admin/index', $data);
    }
    public function simpan()
    {
        
        if (!$this->validate([
            'nama_lengkap' => [
                'rules' => 'required|is_unique[daftar.nama_lengkap]',
                'errors' => [
                    'required' => 'Nama Lengkap nama harus di isi.',
                    'is_unique' => 'Nama Lengkap nama sudah terdaftar'
                ]
                
                ],
            'alamat' => [
                'rules' => 'required|is_unique[daftar.alamat]',
                'errors' => [
                    'required' => 'Alamat  harus di isi.',
                    'is_unique' => 'Alamat  sudah terdaftar'
                ]
                
                ],
            'email' => [
                'rules' => 'required|is_unique[daftar.email]',
                'errors' => [
                    'required' => 'Email  harus di isi.',
                    'is_unique' => 'Email  sudah terdaftar'
                ]
                
                
                ],
            'no_hp' => [
                'rules' => 'required|is_unique[daftar.no_hp]',
                'errors' => [
                    'required' => 'Nomer Handphone   harus di isi.',
                    'is_unique' => 'Nomer Handphone  sudah terdaftar'
                ]
                
                
                ],
                'asal_sekolah' => [
                    'rules' => 'required[daftar.asal_sekolah]',
                    'errors' => [
                        'required' => 'Asal Sekolah   harus di isi.',
                    ]
                    
                    
                    ],
                    'nominal' => [
                        'rules' => 'required[daftar.nominal]',
                        'errors' => [
                            'required' => 'Nominal  harus di isi.',
                        ]
                        
                        
                        ],
        ]
        )) {
            $validation = \Config\Services::validation();
            return redirect()->to('/User/Create')->withInput()->with('validation', $validation->getErrors());
        }
        $alias = url_title($this->request->getVar('nama_lengkap'), '-', true);
$nama_lengkap = $this->request->getVar('nama_lengkap');
$asal_sekolah = $this->request->getVar('asal_sekolah');
$nominal = $this->request->getVar('nominal');
$no_hp = $this->request->getVar('no_hp');
$email = $this->request->getVar('email');
$alamat = $this->request->getVar('alamat');
$tipe_bimbel = $this->request->getVar('tipe_bimbel');
$id_mentor = $this->request->getVar('id_mentor');
$id_order = time();
        \Midtrans\Config::$serverKey = 'SB-Mid-server-II_md8vOI_7aaHmQaiOp0XHZ';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
        $params = array(
            'transaction_details' => array(
                'order_id' => $id_order,
                'gross_amount' => $nominal,
            ),
            'customer_details' => array(
                'nama_lengkap' => $nama_lengkap,
                'alamat' => $alamat,
                'email' => $email,
                'no_hp' => $no_hp,
                'asal_sekolah' => $asal_sekolah,
            
      
            ),
        );
      
        $snaptoken = \Midtrans\Snap::getSnapToken($params);
        $token = $snaptoken;
        $data = ['nama_lengkap' => $nama_lengkap,
                 'nominal' => $nominal,
                 'no_hp' => $no_hp,
                 'email' => $email,
                 'alamat' => $alamat,
                 'asal_sekolah' => $asal_sekolah,
                 'token'=> $token,
                 'id_order'=> $id_order,
                 'snap'=> $snaptoken,
                 'id_mentor'=> $id_mentor,
                 'alias' => $alias,
                 'tipe_bimbel'=> $tipe_bimbel
                
    ];
    $this->bimbelmodel->save($data);


        return redirect()->to('/User/Tagihan')->with('berhasil', 'Silahkan Bayar Tagihan Pembayaran');
    
    }
    public function delete($id)
    {
        $this->bimbelmodel->delete($id);
        return redirect()->to('/Rangking')->with('berhasil', 'Data Pendaftaran Berhasil Di Hapus');
    }
    
    public function update($id)
    {
        $alias = url_title($this->request->getVar('nama_lengkap'), '-', true);
        $this->bimbelmodel->save([
            'nama_lengkap'     => $this->request->getVar('nama_lengkap'),
            'id'      => $id,
            'alias' => $alias,
            'alamat'   => $this->request->getVar('alamat'),
            'email'  => $this->request->getVar('email'),
            'no_hp'  => $this->request->getVar('no_hp'),
            'asal_sekolah'     => $this->request->getVar('asal_sekolah'),
            'paket'     => $this->request->getVar('paket'),
            'jurusan'     => $this->request->getVar('jurusan'),
            'tipe_bimbel'     => $this->request->getVar('tipe_bimbel'),
        ]);
        return redirect()->to('/Rangking')->with('berhasil', 'Data Pendaftaran Berhasil Di Update');
     }
    public function formedit($alias)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'siswa' => $this->bimbelmodel->getsiswa($alias)
        ];

        return view('Admin/edit', $data);
     
    }
    public function sendEmail()
    {
        $email = \Config\Services::email();

        $toEmail = $this->request->getPost('email');
        $toName = $this->request->getPost('nama_lengkap');
        $email->setTo($toEmail);
        $email->setSubject('Surat Penerimaan');
        $email->setMessage('oleh bimbel rangking:
     Pembayaran Sudah Terverivikasi Selamat Bergabung : '.$toName);
        if ($email->send()) {
            return redirect()->back()->with('berhasil', 'Email terkirim');
        } else {
            return redirect()->back()->with('gagal', 'Gagal mengirim email');
        }
    }
    public function formemail($alias)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'siswa' => $this->bimbelmodel->getsiswa($alias)
        ];

        return view('Admin/formemail', $data);
    }
    public function Exel(){
        $tampildata = $this->bimbelmodel->joinToMentor()->findAll();
        $mentorModel = new MentorModel();
        $data = ['tampildata'=> $tampildata,
    'mentor'=>$mentorModel];
    $spreadsheet = new Spreadsheet();
    $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A1', 'Nama Siswa')
                ->setCellValue('B1', 'Asal Sekolah')
                ->setCellValue('C1', 'Ju')
                ->setCellValue('D1', 'Angkatan')
                ->setCellValue('E1', 'NIS');
    
    $column = 2;
    foreach($tampildata as $data) {
        $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue('A' . $column, $data['nama_lengkap'])
                    ->setCellValue('B' . $column, $data['asal_sekolah'])
                    ->setCellValue('C' . $column, $data['pelajaran'])
                    ->setCellValue('D' . $column, $data['nama'])
                    ->setCellValue('E' . $column, $data['jampel']);
        $column++;
    }
   
    $writer = new Xlsx($spreadsheet);
    $fileName = 'Data Siswa';
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename='.$fileName.'.xlsx');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');

    }
   public function Grafik()  {
    $tampildata = $this->bimbelmodel->findAll();
    $data = ['tampil' =>  $tampildata];
return view('Admin/grafik',$data);        
    }

}
  