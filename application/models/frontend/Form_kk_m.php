<?php

class Form_kk_m extends MY_Model
{
    private $_table = 'tbl_form_kk';

    function __construct(){
		  parent::__construct();
    }
    
    public function store(){
        $_POST = $this->input->post();
        $data['nik'] = $_POST['nik'];
        $data['tanggal_pengajuan'] = date("Y-m-d h:i:s");
        $status = $this->db->insert($this->_table,$data) ? true:false;
        return $status;
        
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
}
