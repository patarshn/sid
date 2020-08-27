<?php

class Izinusaha_m extends MY_Model
{
    private $_table = 'tbl_form_izinusaha';

    function __construct(){
		  parent::__construct();
    }

    public function get($id = null){
        if($id == null){
            return $this->db->get($this->_table)->result();
        }
        else{
            return $this->db->where('id_form_izinusaha',$id)->get($this->_table)->result();
        }
    }

    public function update(){
        $_POST = $this->input->post();
        $data['id_form_izinusaha'] = $_POST['id'];
        $data['nik'] = $_POST['nik'];
        $data['nama_usaha'] = $_POST['nama_usaha'];
        $data['alamat_usaha'] = $_POST['alamat_usaha'];
        $status = $this->db->where('id_form_izinusaha',$data['id_form_izinusaha'])->update($this->_table,$data) ? true:false;
        return $status;
    }

    public function destroy(){
        $_POST = $this->input->post();
        $rowdetele = $_POST['rowdelete'];
        foreach($rowdetele as $r){
            $status = $this->db->where('id_form_izinusaha',$r)->delete($this->_table) ? true:false;
        }
        return $status;
    }
    
}
