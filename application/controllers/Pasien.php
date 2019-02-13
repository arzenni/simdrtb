<?php
    class Pasien extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Pasien_model');
            date_default_timezone_set("Asia/Jakarta");
        }

        public function index()
        {
            $data=[
                'title' => 'Data Pasien',
                'pasien' => $this->Pasien_model->getAllpasien()
            ];
            $this->load->view("template/header",$data);
            $this->load->view("pasien/index",$data);
            $this->load->view("template/footer");
        }

        public function tambahpasien()
        {
            $norm = trim($this->input->post('noRm'));
            if($norm != null)
            {
                $cek = $this->Pasien_model->getbyId($norm);
                if($cek != null)
                {
                    $this->session->set_flashdata('pasien', 'Gagal Ditambahkan, Nomor Rekam Medis Sudah Ada');
                    redirect('pasien');
                }
                else
                {
                    $wkt = date('Y-m-d H:i:s');
                    $data1=[
                        "noRm" => trim($this->input->post('noRm')),
                        "nik" => trim($this->input->post('nik')),
                        "nama" => trim(ucwords($this->input->post('nama'))),
                        "tglahir" => $this->input->post('tglahir'),
                        "tglregistrasi" => $this->input->post('tgregis'),
                        "jnsK" => $this->input->post('jnsK'),
                        "ibu" => trim(ucwords($this->input->post('ibu'))),
                        "wktpencatatan" => $wkt,
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
                        $this->session->set_flashdata('pasien', 'Berhasil Ditambahkan');
                        redirect('pasien');
                }
            }
            else
            {
                $this->session->set_flashdata('pasien', 'Gagal Ditambahkan, Nomor Rekam Medis Kosong atau Terjadi Kesalahan');
                redirect('pasien');
            }
        }

        public function detilpasien()
        {
            $id = $this->input->get('id');
            echo json_encode($this->Pasien_model->getbyId($id));
        }

        public function ubahpasien()
        {
            $this->Pasien_model->ubahpasien();
            $this->session->set_flashdata('pasien', 'Data Berhasil Diubah');
            redirect('pasien','refresh');
        }

        public function hapus($id){
            $this->Pasien_model->hapuspasien($id);
            $this->session->set_flashdata('pasien', 'Data Berhasil Dihapus');
            redirect('pasien','refresh');
        }

    }
