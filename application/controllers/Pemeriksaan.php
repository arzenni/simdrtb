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
            //$data['pasien'] = $this->Pemeriksaan_model->getAllpemeriksaan();
            // $data['lengkap'] = $this->Pemeriksaan_model->getDatalengkap();
            $this->load->view('template/header', $data);
            $this->load->view('pemeriksaan/index', $data);
            $this->load->view('template/footer');
        }

        public function tambahpemeriksaan()
        {
            $data ['idPeriksa'] = $this->Pemeriksaan_model->getIdperiksa();
            $newId = $data['idPeriksa'] + 1;
            echo var_dump($newId);
            echo var_dump($_POST);
                        $this->Pemeriksaan_model->tambahtcm();
            $this->Pemeriksaan_model->tambahpemeriksaan($newId);
            // if($this->Pemeriksaan_model->cekRm($_POST['noRm']) !== null)
            // {
            //         if( $this->input->post('idreg') !== null)
            //         {
            //         }
            //         if( $this->input->post('idMk') !== null)
            //         {
            //             $this->Pemeriksaan_model->mikroskopis();
            //         }
            //         if( $this->input->post('noRm') !== null)
            //         {
            //             $this->Pemeriksaan_model->tambahpemeriksaan();
            //             redirect('pemeriksaan');
            //         }
                   
            // else {
            //     echo "Nomor Rekam Medis Belum Ada";
            // }

            // }

        }

        // public function tcm()
        // {
        //     $data[];
        // }
    }