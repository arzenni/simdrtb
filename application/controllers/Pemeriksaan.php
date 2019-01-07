<?php

    class Pemeriksaan extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Pemeriksaan_model');
        }

        public function index()
        {
            $data['judul'] ='Data Pasien';
            $data['pasien'] = $this->Pemeriksaan_model->getAllpemeriksaan();
            // $data['lengkap'] = $this->Pemeriksaan_model->getDatalengkap();
            $this->load->view('template/header', $data);
            $this->load->view('pemeriksaan/index', $data);
            $this->load->view('template/footer');
        }

        public function tambahpemeriksaan()
        {
            if( $this->input->post('idreg') !== null && $this )
            {
                $this->Pemeriksaan_model->tambahtcm();
            }
            if
            $this->Pemeriksaan_model->tambahdiagnosa();

        }

        // public function tcm()
        // {
        //     $data[];
        // }
    }