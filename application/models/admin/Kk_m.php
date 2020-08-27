<?php

class kk_m extends MY_Model
{
    private $_table = 'tbl_form_kk';

    function __construct(){
		  parent::__construct();
    }


    public function get($id = null){
        /*if($id == null){
            return $this->db->get($this->_table)->result();
        }
        else{
            return $this->db->where('id_form_kk',$id)->get($this->_table)->result();
        }*/
        if($id == null){
            $result = $this->db->select('*')
            ->from($this->_table)
            ->join('data_kependudukan', 'data_kependudukan.nik = '.$this->_table.'.nik')
            ->get()->result();
        }
        else{
            $result = $this->db->select('*')
            ->from($this->_table)
            ->join('data_kependudukan', 'data_kependudukan.nik = '.$this->_table.'.nik')
            ->where('id_form_kk',$id)
            ->get()->result();;
        }
        return $result;

    }

    public function update(){
        $_POST = $this->input->post();
        $id = $_POST['id'];
        $data['verifikasi_rt'] = $_POST['verifikasi_rt'];
        $data['verifikasi_rw'] = $_POST['verifikasi_rw'];
        $status = $this->db->where('id_form_kk',$id)->update($this->_table,$data) ? true:false;
        return $status;
    }

    
    public function destroy(){
        $_POST = $this->input->post();
        $rowdetele = $_POST['rowdelete'];
        foreach($rowdetele as $r){
            $status = $this->db->where('id_form_kk',$r)->delete($this->_table) ? true:false;
        }
        return $status;
    }
    
}
