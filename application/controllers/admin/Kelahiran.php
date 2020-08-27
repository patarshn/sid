<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelahiran extends Admin_Controller{

    function __construct()
	{
        parent::__construct();
        $this->load->model('admin/kelahiran_m');
    }    
    
    function rulesUpdate(){
        return [
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],

            ['field' => 'nkk',
            'label' => 'NKK',
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
            'kelahiran' => $this->kelahiran_m->get(),
        );

        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/content_sidebar');
        $this->load->view('admin/partials/content_navbar');
        $this->load->view('admin/kelahiran/index',$data);
        $this->load->view('admin/partials/content_footer');
        $this->load->view('admin/partials/footer');
    }

    function edit($id){
        
        $data = array(
            'kelahiran' => $this->kelahiran_m->get($id),
        );

        $this->load->view('admin/partials/header');
        $this->load->view('admin/partials/content_sidebar');
        $this->load->view('admin/partials/content_navbar');
        $this->load->view('admin/kelahiran/edit',$data);
        $this->load->view('admin/partials/content_footer');
        $this->load->view('admin/partials/footer');
    }

    public function update(){
        $validation = $this->form_validation;
        $validation->set_rules($this->rulesUpdate());
        if($validation->run()){
            if($this->kelahiran_m->update()){
                $this->session->set_flashdata('success_message', 'Edit form berhasil, terimakasih');
                $callback = array(
                    'status' => 'success',
                    'message' => 'Data berhasil diupdate',
                    'redirect' => base_url().'admin/kelahiran',
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
        //redirect(base_url('form_kelahiran'), 'refresh');
    }
    
    public function destroy(){
        $validation = $this->form_validation;
        $validation->set_rules($this->rulesDestroy());
        if($validation->run()){
            if($this->kelahiran_m->destroy()){
                $this->session->set_flashdata('success_message', 'Delete form berhasil, terimakasih');
                $callback = array(
                    'status' => 'success',
                    'message' => 'Data berhasil dihapus',
                    'redirect' => base_url().'admin/kelahiran',
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
                'redirect' => base_url().'admin/kelahiran',
            );          
        }
        echo json_encode($callback);
        //redirect(base_url('form_kelahiran'), 'refresh');
    }

}