<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ktp extends Admin_Controller{

    function __construct()
	{
        parent::__construct();
        $this->load->model('admin/Ktp_m');
    }    
    
    function rulesUpdate(){
        return [
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],

            ['field' => 'nik',
            'label' => 'NIK',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'tempat_lahir',
            'label' => 'Tempat Lahir',
            'rules' => 'required'],

            ['field' => 'tanggal_lahir',
            'label' => 'Tanggal Lahir',
            'rules' => 'required'],

            ['field' => 'agama',
            'label' => 'Agama',
            'rules' => 'required'],
            
            ['field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'required'],

            ['field' => 'golongan_darah',
            'label' => 'Golongan Darah',
            'rules' => 'required'],

            ['field' => 'kebangsaan',
            'label' => 'Kebangsaan',
            'rules' => 'required'],

            ['field' => 'pekerjaan',
            'label' => 'Pekerjaan',
            'rules' => 'required'],

            ['field' => 'pendidikan',
            'label' => 'Pendidikan',
            'rules' => 'required'],

            ['field' => 'status_kawin',
            'label' => 'Staus Pernikahan',
            'rules' => 'required'],

            ['field' => 'id_rw',
            'label' => 'RW',
            'rules' => 'required'],

            ['field' => 'id_rt',
            'label' => 'RT',
            'rules' => 'required'],
        ];
    }

    function rulesDestroy(){
        return [
            ['field' => 'rowdelete[]',
            'label' => 'rowdelete',
            'rules' => 'required']
        ];
    }

    function index(){
        
        $data = array(
            'ktp' => $this->Ktp_m->get(),
        );

        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/content_sidebar');
        $this->load->view('admin/partials/content_navbar');
        $this->load->view('admin/ktp/index',$data);
        $this->load->view('admin/partials/content_footer');
        $this->load->view('admin/partials/footer');
    }

    function edit($id){
        
        $data = array(
            'ktp' => $this->Ktp_m->get($id),
        );

        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/content_sidebar');
        $this->load->view('admin/partials/content_navbar');
        $this->load->view('admin/ktp/edit',$data);
        $this->load->view('admin/partials/content_footer');
        $this->load->view('admin/partials/footer');
    }

    public function update(){
        $validation = $this->form_validation;
        $validation->set_rules($this->rulesUpdate());
        if($validation->run()){
            if($this->Ktp_m->update()){
                $this->session->set_flashdata('success_message', 'Edit form berhasil, terimakasih');
                $callback = array(
                    'status' => 'success',
                    'message' => 'Data berhasil diupdate',
                    'redirect' => base_url().'admin/ktp',
                );
            }
            else{
                $this->session->set_flashdata('error_message', 'Mohon maaf, pengisian form gagal');
                $callback = array(
                    'status' => 'error',
                    'message' => 'Mohon Maaf, Pengisian form gagal',
                );
            }
        }
        else{
            $this->session->set_flashdata('error_message', validation_errors());
            $callback = array(
                'status' => 'error',
                'message' => validation_errors(),
            );          
        }
        echo json_encode($callback);
        //redirect(base_url('form_ktp'), 'refresh');
    }
    
    public function destroy(){
        $validation = $this->form_validation;
        $validation->set_rules($this->rulesDestroy());
        if($validation->run()){
            if($this->Ktp_m->destroy()){
                $this->session->set_flashdata('success_message', 'Delete form berhasil, terimakasih');
                $callback = array(
                    'status' => 'success',
                    'message' => 'Data berhasil dihapus',
                    'redirect' => base_url().'admin/ktp',
                );
            }
            else{
                $this->session->set_flashdata('error_message', 'Mohon maaf, delete form gagal');
                $callback = array(
                    'status' => 'error',
                    'message' => 'Mohon Maaf, Pengisian form gagal',
                );
            }
        }
        else{
            $this->session->set_flashdata('error_message', validation_errors());
            $callback = array(
                'status' => 'error',
                'message' => validation_errors(),
                'redirect' => base_url().'admin/ktp',
            );          
        }
        echo json_encode($callback);
        //redirect(base_url('form_ktp'), 'refresh');
    }

}