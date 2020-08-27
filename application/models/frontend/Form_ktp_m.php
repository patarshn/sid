<?php

class Form_ktp_m extends MY_Model
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

}
