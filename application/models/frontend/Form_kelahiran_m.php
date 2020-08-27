<?php

class Form_kelahiran_m extends MY_Model
{
    private $_table = 'tbl_form_kelahiran';

    function __construct(){
		  parent::__construct();
    }
    
    public function store(){
        $_POST = $this->input->post();
        $data['nkk'] = $_POST['nkk'];
        $data['id_rw'] = 0;
        $data['id_rt'] = 0;
        $data['tanggal_pengajuan'] = date('Y/m/d h:i:sa');
        $status = $this->db->insert($this->_table,$data) ? true:false;
        return $status;
        
    }
}
