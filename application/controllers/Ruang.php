<?php

class Ruang extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ruang_model');
    }

    public function index(){
        $data['title'] = 'Tambah Ruang';
        $data['ruang'] = $this->Ruang_model->getAllruang();
        $this->load->view('template/header', $data);
        $this->load->view('ruang/index', $data);
        $this->load->view('template/footer'); 
    }

    public function tambahruang(){
        $data = [
            "ruang" => ucwords(trim($this->input->post('ruang')))
        ];
        $this->Ruang_model->tambahruang($data);
        
        redirect('ruang','refresh');
        
    }

    public function hapusruang($id){
         echo var_dump($id);
        $this->Ruang_model->hapusruang($id);
        
        redirect('ruang','refresh');
        
    }
}
