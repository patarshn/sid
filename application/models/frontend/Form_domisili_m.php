<?php

class Form_domisili_m extends MY_Model
{
    private $_table = 'tbl_form_ketdomisili';

    function __construct(){
		  parent::__construct();
    }
    
    public function store(){
        $_POST = $this->input->post();
        $data['nik'] = $_POST['nik'];

        $status = $this->db->insert($this->_table,$data) ? true:false;
        return $status;
        
    }
}
