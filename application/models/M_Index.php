<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Index extends CI_Model {
    public function ambilData(){
        return $this->db->get('tb_siswa')->result_array(); //Mengembalikan hasil dari Get tb_siswa dalam bentuk array ke fungsi ambilData.
    }
 
    public function tambahData($data){
        $this->db->insert('tb_siswa',$data);
    }
 
    public function ambilDataByNoinduk($noinduk){
        $this->db->where('noinduk',$noinduk);
        return $this->db->get('tb_siswa')->result_array(); //Mengembalikan hasil dari Get tb_siswa dalam bentuk array ke fungsi ambilDataByNoinduk($noinduk).
    }
 
    public function updateData($data,$noinduk){
        $this->db->where('noinduk',$noinduk);
        $this->db->update('tb_siswa',$data); //Melakukan update pada tb_siswa dengan data dari $data yang didapat dari controller.
    }
 
    public function deleteData($noinduk){
        $this->db->where('noinduk',$noinduk); // persamaan kolom noinduk dengan variabel noinduk yang didapat dari controller
        $this->db->delete('tb_siswa');  //Menghapus baris pada tb siswa dengan kondisi seperti di atas.
    }
}