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
             $id = $this->Pemeriksaan_model->getIdperiksa();
             $newId = $id->idPeriksa +1;
             echo 'id==';
            echo var_dump($id);
            echo '</br>';
            echo 'newid==';
            echo var_dump($newId);
            echo '</br>';
            echo var_dump($_POST);
            if ($this->input->post('idreg') !== null){
                $this->Pemeriksaan_model->tambahtcm();
                $this->Pemeriksaan_model->tambahpemeriksaan($newId);
            }else{
                $this->Pemeriksaan_model->tambahpemeriksaan();

            }
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