<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends Frontend_Controller{

/*
    function __construct()
	{
        parent::__construct();
        //$this->load->model('frontend/Form_M');
    }    
    
    function index(){
        $data = $this->uri->segment(2);
        echo $data;
    }

    function form($url){
        

        $jumbotron = $this->formSetting($url);

        $this->load->view('frontend/partials/header');
        $this->load->view('frontend/partials/content_navbar');
        $this->load->view('frontend/partials/content_jumbotron',$jumbotron);
        $this->load->view('frontend/form/'.$url);
        $this->load->view('frontend/partials/content_footer');
        $this->load->view('frontend/partials/footer');
    }

    public function _remap($url)
    {   

        
        if (file_exists(APPPATH.'views/frontend/form/'.$url.'.php'))
        {
                $this->form($url);
        }
        elseif (function_exists('ayam')){
            echo "ANJAY";
        }
        else
        {
                $this->index();
        }
    }

    public function formSetting($url = null){
        //cari url untuk mengganti data dengan ctrl+f
        if($url == null){$data = array("jumbotron" => "","title" => "",);}
        elseif($url == "form_belummenikah"){$data = array("jumbotron" => "","title" => "Form Belum Menikah",);}
        elseif($url == "form_domisili"){$data = array("jumbotron" => "","title" => "Form Domisili",);}
        elseif($url == "form_hibah"){$data = array("jumbotron" => "","title" => "Form Hibah",);}
        elseif($url == "form_izinusaha"){$data = array("jumbotron" => "","title" => "Form Izin Usaha",);}
        elseif($url == "form_jualbeli"){$data = array("jumbotron" => "","title" => "Form Jual Beli",);}
        elseif($url == "form_kelahiran"){$data = array("jumbotron" => "","title" => "Form Kelahiran",);}
        elseif($url == "form_kematian"){$data = array("jumbotron" => "","title" => "Form Kematian",);}
        elseif($url == "form_kk"){$data = array("jumbotron" => "","title" => "Form Kartu Keluarga",);}
        elseif($url == "form_ktp"){$data = array("jumbotron" => "","title" => "Form Kartu Tanda Penduduk",);}
        elseif($url == "form_sudahmenikah"){$data = array("jumbotron" => "","title" => "Form Sudah Menikah",);}
        elseif($url == "form_tidakmampu"){$data = array("jumbotron" => "","title" => "Form Keterangan Tidak Mampu",);}
        elseif($url == "form_waris"){$data = array("jumbotron" => "","title" => "Form Waris",);}
        
        return $data;
    }

    //ACTION
    public function store_form_belummenikah(){

    }
*/
}