<?php

class Form_kematian_m extends MY_Model
{
    private $_table = 'tbl_form_kematian';

    function __construct(){
		  parent::__construct();
    }
    
    public function store(){
        $_POST = $this->input->post();
        $data['nik'] = $_POST['nik'];
        $data['id_rw'] = 0;
        $data['id_rt'] = 0;
        $data['alamat'] = $_POST['alamat'];
        $data['pekerjaan'] = $_POST['pekerjaan'];
        $data['tanggal_kematian'] = $_POST['tanggal_kematian'];
        $data['penyebab'] = $_POST['penyebab_kematian'];
        $data['tanggal_pengajuan'] = date('Y/m/d h:i:sa');
        $status = $this->db->insert($this->_table,$data) ? true:false;
        return $status;
        
    }
}
