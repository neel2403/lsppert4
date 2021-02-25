<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Index extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Index');
	}
    public function index()
    {
        $dataSiswa = $this->M_Index->ambilData(); // Menyimpan hasil dari fungsi ambilData di M_Index pada variabel dataSiswa;
 
        $data['siswa'] = $dataSiswa; // Mengoper variabel dataSiswa ke View V_Index
 
        $this->load->view('V_Index', $data);
    }
 
    public function tambahData()
    {
        $noinduk    = $this->input->post('no_induk'); // Menangkap hasil dari Input no_induk
        $nama       = $this->input->post('nama'); // Menangkap hasil dari Input nama
        $hobi       = $this->input->post('hobi'); // Menangkap hasil dari Input hobi
        $alamat     = $this->input->post('alamat'); // Menangkap hasil dari Input alamat
 
        $data = ["noinduk"  => $noinduk,
                 "nama"     => $nama,
                 "hobi"     => $hobi,
                 "alamat"   => $alamat
                ]; // Menyimpan hasil dari noinduk,nama,hobi, dan alamat pada array;
 
 
        $this->M_Index->tambahData($data); //Memanggil fungsi tambahData pada M_Index sambil membawa $data;
        redirect();
         
 
    }
 
    public function editData($noinduk){
 
        $data['siswa_edit'] = $this->M_Index->ambilDataByNoinduk($noinduk); //menampun hasil dari fungsi ambilDataByNoinduk($noinduk) ke variabel $data['siswa_edit']
        $this->load->view('V_Edit',$data);
    }
 
    public function updateData($noinduk){
        $nama       = $this->input->post('nama');
        $hobi       = $this->input->post('hobi');
        $alamat     = $this->input->post('alamat');
        $data = ["noinduk"  => $noinduk,
                 "nama"     => $nama,
                 "hobi"     => $hobi,
                 "alamat"   => $alamat
                ];
        // echo "<pre>";
        // print_r($data);
        // exit();      
        $this->M_Index->updateData($data,$noinduk); //Memanggil fungsi updateData pada M_Index sambil mengoper $data dan $noinduk ke fungsi updateData pada M_Index 
        redirect();         
    }
 
    public function deleteData($noinduk){
        $this->M_Index->deleteData($noinduk); //Memanggil fungsi deleteData pada M_Index sembari membawa parameter $noinduk.
        redirect();
    }
}