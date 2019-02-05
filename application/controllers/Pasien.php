<?php
    class Pasien extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Pasien_model');
        }

        public function index()
        {
            $data['title'] ='Data Pasien';
            $data['pasien'] = $this->Pasien_model->getAllpasien();
            // $data['lengkap'] = $this->Pasien_model->getDatalengkap();
            $this->load->view("template/header",$data);
            $this->load->view("pasien/index",$data);
            $this->load->view("template/footer");
        }

        public function tambahpasien()
        {
            $data1=[
                "noRm" => trim($this->input->post('noRm')),
                "nik" => trim($this->input->post('nik')),
                "nama" => trim(ucwords($this->input->post('nama'))),
                "tglahir" => $this->input->post('tglahir'),
                "tglregistrasi" => $this->input->post('tgregis'),
                "jnsK" => $this->input->post('jnsK'),
                "ibu" => trim(ucwords($this->input->post('ibu'))),
            ];
            
            $data2=[
                "noRm" => trim($this->input->post('noRm')),
                "dsn" => trim(ucwords($this->input->post('dsn'))),
                "rt" => trim($this->input->post('rt')),
                "rw" => trim($this->input->post('rw')),
                "kelurahan" => trim(ucwords($this->input->post('kelurahan'))),
                "kecamatan" => trim(ucwords($this->input->post('kecamatan'))),
                "kota" => trim(ucwords($this->input->post('kota'))),
            ];
                $this->Pasien_model->tambahpasien($data1, $data2);
                redirect('pasien');
            //}
            //   var_dump($_POST);
        }

        public function detilpasien()
        {
            // echo 'siyaph';
            // echo $_POST['id'];

            echo json_encode($this->Pasien_model->getbyId($_POST['id']));
            //$data['']
            //$data['pasien'] = $this->Pasien_model->getbyIdpasien($id);
        }

        public function ubahpasien()
        {
            $this->Pasien_model->ubahpasien();
            redirect('pasien');
        }

        public function hapus($id){
            $this->Pasien_model->hapuspasien($id);
            
            redirect('pasien','refresh');
            
        }

    }
