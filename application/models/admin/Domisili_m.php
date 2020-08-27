<?php

class Domisili_m extends MY_Model
{
    private $_table = 'tbl_form_ketdomisili';

    function __construct(){
		  parent::__construct();
    }

    public function get($id = null){
        if($id == null){
            return $this->db->get($this->_table)->result();
        }
        else{
            return $this->db->where('id_form_domisili',$id)->get($this->_table)->result();
        }
    }

    public function update(){
        $_POST = $this->input->post();
        $data['id_form_domisili'] = $_POST['id'];
        $data['nik'] = $_POST['nik'];
        $data['nama'] = $_POST['nama'];
        $data['alamat'] = $_POST['alamat'];
        $status = $this->db->where('id_form_domisili',$data['id_form_domisili'])->update($this->_table,$data) ? true:false;
        return $status;
    }

    public function destroy(){
        $_POST = $this->input->post();
        $rowdetele = $_POST['rowdelete'];
        foreach($rowdetele as $r){
            $status = $this->db->where('id_form_domisili',$r)->delete($this->_table) ? true:false;
        }
        return $status;
    }
    
}
