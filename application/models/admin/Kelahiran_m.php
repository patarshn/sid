<?php

class Kelahiran_m extends MY_Model
{
    private $_table = 'tbl_form_kelahiran';

    function __construct(){
		  parent::__construct();
    }

    public function get($id = null){
        if($id == null){
            return $this->db->get($this->_table)->result();
        }
        else{
            return $this->db->where('id_form_kelahiran',$id)->get($this->_table)->result();
        }
    }

    public function update(){
        $_POST = $this->input->post();
        $data['id_form_kelahiran'] = $_POST['id'];
        $data['nkk'] = $_POST['nkk'];
        $data['nama'] = $_POST['nama'];
        $data['tanggal_lahir'] = $_POST['tanggal_lahir'];
        $status = $this->db->where('id_form_kelahiran',$data['id_form_kelahiran'])->update($this->_table,$data) ? true:false;
        return $status;
    }

    public function destroy(){
        $_POST = $this->input->post();
        $rowdetele = $_POST['rowdelete'];
        foreach($rowdetele as $r){
            $status = $this->db->where('id_form_kelahiran',$r)->delete($this->_table) ? true:false;
        }
        return $status;
    }
    
}
