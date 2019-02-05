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
            $data['hitunglanjutoat'] = $this->Statistik_model->hitunglanjutoat();
            // $data['hitungstokoat'] = $this->Statistik_model->hitungstokoat();
            $data['hitungvct'] = $this->Statistik_model->hitungvct();
            $data['hitungmik'] = $this->Statistik_model->hitungmik();
            $data['hitungtcm'] = $this->Statistik_model->hitungtcm();
            $data['hitungterapi'] = $this->Statistik_model->hitungterapi();

            echo var_dump($data);
            $this->load->view('template/header', $data);
            $this->load->view('statistik/index', $data);
            $this->load->view('template/footer');
        }
        
    }
