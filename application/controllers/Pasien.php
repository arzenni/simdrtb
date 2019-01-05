<?php
    class Pasien extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Pasien_model');
        }

        public function index()
        {
            $data['judul'] ='Data Pasien';
            $data['pasien'] = $this->Pasien_model->getAllpasien();
            // $data['lengkap'] = $this->Pasien_model->getDatalengkap();
            $this->load->view("template/header",$data);
            $this->load->view("pasien/index",$data);
            $this->load->view("template/footer");
        }

        public function tambahpasien()
        {
            $data['judul'] = 'Tambah Data Pasien';

        }

        public function detilpasien()
        {
            // echo 'siyaph';
            // echo $_POST['id'];

            echo json_encode($this->Pasien_model->getbyId($_POST['id']));
            //$data['']
            //$data['pasien'] = $this->Pasien_model->getbyIdpasien($id);
        }

    }
