<?php
    class Statistik extends CI_Controller
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Statistik_model');
            
        }

        public function index(){
            $data['title'] = 'Statistik Pasien';
            $data = [
                'title' => 'Statistik Pasien',
                'hitunglanjutoat' => $this->Statistik_model->hitunglanjutoat(),
                'hitungvct' => $this->Statistik_model->hitungvct(),
                'hitungmik' => $this->Statistik_model->hitungmik(),
                'hitungtcm' => $this->Statistik_model->hitungtcm(),
                'hitungterapi' => $this->Statistik_model->hitungterapi()
            ];
            // $data['hitungstokoat'] = $this->Statistik_model->hitungstokoat();
            $this->load->view('template/header', $data);
            $this->load->view('statistik/index', $data);
            $this->load->view('template/footer');
        }
        
    }
