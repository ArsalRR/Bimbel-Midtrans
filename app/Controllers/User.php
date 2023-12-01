<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ModelBimbel;
use App\Models\MentorModel;
use Dompdf\Dompdf;
class User extends BaseController
{
    protected $bimbelmodel;
    public function __construct()
    {
        $this->bimbelmodel = new ModelBimbel();

    }
    public function index()
    {

        return view('Users/index');
    }
public function Create(){  

  $tampildata = $this->bimbelmodel->joinToMentor()->findAll();
        $mentorModel = new MentorModel();
        $data = ['tampildata'=>$tampildata,
    'mentor'=> $mentorModel->findAll()];
return view('Users/Create',$data);
    }
    public function Tagihan(){  
        $tampil = $this->bimbelmodel->findAll();
            $data = ['tampildata'=> $tampil];
        return view('Users/Tagihan',$data);
            }
            public function daftar(){
                $tampil = $this->bimbelmodel->findAll();
                $data = ['tampildata'=> $tampil];
                return view('Users/Daftar',$data);
            }
            public function Laporan(){
                $tampildata = $this->bimbelmodel->joinToMentor()->findAll();
                $mentorModel = new MentorModel();
                $totalnominal = $this->bimbelmodel->getTotalNominal();
                $data = ['tampildata'=>$tampildata,
                'total'=> $totalnominal,
              'mentor'=> $mentorModel  

            ];
            return view('Admin/Laporan',$data);
            }
            public function cek(){
                $totalnominal = $this->bimbelmodel->getTotalNominal();
                $tampildata = $this->bimbelmodel->joinToMentor()->findAll();
                $mentorModel = new MentorModel();
                $data = ['tampildata'=>$tampildata,
              'mentor'=> $mentorModel, 
              'total' => $totalnominal

            ];
                return view('Admin/cek',$data);
            }
            public function Print(){
                $tampildata = $this->bimbelmodel->joinToMentor()->findAll();
                $mentorModel = new MentorModel();
                $data = ['tampildata'=>$tampildata,
              'mentor'=> $mentorModel  

            ];
            $html = view('Admin/print', $data);
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream();
            }
           
            
}

