<?php

class Ktp_m extends MY_Model
{
    private $_table = 'tbl_form_ktp';

    function __construct(){
		  parent::__construct();
    }
    
    public function store(){
        $_POST = $this->input->post();
        $data['nik'] = $_POST['nik'];
        $data['nama'] = $_POST['nama'];
        $data['alamat'] = $_POST['alamat'];
        $data['tanggal_lahir'] = $_POST['tanggal_lahir'];
        $data['tempat_lahir'] = $_POST['tempat_lahir'];
        $data['agama'] = $_POST['agama'];
        $data['jenis_kelamin'] = $_POST['jenis_kelamin'];
        $data['golongan_darah'] = $_POST['golongan_darah'];
        $data['kebangsaan'] = $_POST['kebangsaan'];
        $data['pekerjaan'] = $_POST['pekerjaan'];
        $data['pendidikan'] = $_POST['pendidikan'];
        $data['status_kawin'] = $_POST['status_kawin'];
        $data['id_rt'] = $_POST['id_rt'];
        $data['id_rw'] = $_POST['id_rw'];
        $data['tanggal_pengajuan'] = Date('m-d-y H:i:s');

        $status = $this->db->insert($this->_table,$data) ? true:false;
        return $status;
        
    }

    public function get($id = null){
        if($id == null){
            return $this->db->get($this->_table)->result();
        }
        else{
            return $this->db->where('id',$id)->get($this->_table)->result();
        }
    }

    public function update(){
        $_POST = $this->input->post();
        $data['id'] = $_POST['id'];
        $data['nik'] = $_POST['nik'];
        $data['nama'] = $_POST['nama'];
        $data['alamat'] = $_POST['alamat'];
        $data['tanggal_lahir'] = $_POST['tanggal_lahir'];
        $data['tempat_lahir'] = $_POST['tempat_lahir'];
        $data['agama'] = $_POST['agama'];
        $data['jenis_kelamin'] = $_POST['jenis_kelamin'];
        $data['golongan_darah'] = $_POST['golongan_darah'];
        $data['kebangsaan'] = $_POST['kebangsaan'];
        $data['pekerjaan'] = $_POST['pekerjaan'];
        $data['pendidikan'] = $_POST['pendidikan'];
        $data['status_kawin'] = $_POST['status_kawin'];
        $data['id_rt'] = $_POST['id_rt'];
        $data['id_rw'] = $_POST['id_rw'];
        $data['tanggal_pengajuan'] = Date('m-d-y H:i:s');  
        $status = $this->db->where('id',$data['id'])->update($this->_table,$data) ? true:false;
        return $status;
    }

    public function destroy(){
        $_POST = $this->input->post();
        $rowdetele = $_POST['rowdelete'];
        foreach($rowdetele as $r){
            $status = $this->db->where('id',$r)->delete($this->_table) ? true:false;
        }
        return $status;
    }
    
}
