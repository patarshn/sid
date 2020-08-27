<?php

class Form_jualbeli_m extends MY_Model
{
    private $_table = 'tbl_form_ketjualbeli';

    function __construct(){
		  parent::__construct();
    }
    
    public function store(){
        $_POST = $this->input->post();
        $data['nik'] = $_POST['nik1'];
        
        $status = $this->db->insert($this->_table,$data) ? true:false;
        return $status;
        
    }
}
