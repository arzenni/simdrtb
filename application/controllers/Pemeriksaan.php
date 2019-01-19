<?php

    class Pemeriksaan extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Pemeriksaan_model');
        }

        public function index()
        {
            // $data['judul'] ='Data Pasien';
            $data['pemeriksaan'] = $this->Pemeriksaan_model->getAllpemeriksaan();
            // $data['lengkap'] = $this->Pemeriksaan_model->getDatalengkap();
            $this->load->view('template/header', $data);
            $this->load->view('pemeriksaan/index', $data);
            var_dump($data);
            $this->load->view('template/footer');
        }

        public function lengkap(){
            $this->Pemeriksaan_model->tambahpemeriksaan();
            $id = $this->Pemeriksaan_model->getIdperiksa();
            $newId = $id->idPeriksa;
            echo 'id==';
            echo var_dump($id);
            echo '</br>';
            echo 'newid==';
            echo var_dump($newId);
            echo '</br>';
            $this->Pemeriksaan_model->mikroskopis($newId);
            $this->Pemeriksaan_model->lanjutoat($newId);
            $this->Pemeriksaan_model->hasilpengobatan($newId);
            $this->Pemeriksaan_model->stokoat($newId);
            $this->Pemeriksaan_model->terapi($newId);
            $this->Pemeriksaan_model->tescepat($newId);
            $this->Pemeriksaan_model->vct($newId);
        }

        public function tambahpemeriksaan()
        {
             
            echo var_dump($_POST);
            $tcm = $this->Pemeriksaan_model->cektcm();
            echo '<br>dumptcm';
            var_dump ($tcm);
            if($tcm == null){
                
                $this->Pemeriksaan_model->tambahtcm();
                echo 'tcm kosong';
                $this->lengkap();
                redirect('pemeriksaan');
            }else{
                if ($this->input->post('genxpert') != null){
                    echo 'tcm masuk1';
                    $this->Pemeriksaan_model->tambahtcm();
                    $this->lengkap();
                    redirect('pemeriksaan');
                }else{
                    echo 'else tcm tidak masuk';
                    $this->lengkap();
                    redirect('pemeriksaan');
                }
            }
           
        }

        public function detil($id){
        echo var_dump($id);
        $data = 123444444; //$this->Pemeeriksaan_model->detil($_POST['id']);
        $this->load->view('template/header', $data);
        $this->load->view('pemeriksaan/detil', $data);
        var_dump($data);
        $this->load->view('template/footer');
        }

    }