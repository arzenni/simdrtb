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
            $this->load->view('template/header', $data);
            $this->load->view('pemeriksaan/index', $data);
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
            if(isset($_POST['norm'])){

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
            }else{
                echo "isi form";
                redirect('pemeriksaan');
            }
        }

        public function detil(){
        echo json_encode($this->Pemeriksaan_model->detil($_POST['id']));
        }


        public function autofill(){
            $norm = $this->input->post('norm');
            echo json_encode($this->Pemeriksaan_model->autofill($norm));

        }

        public function updatePemeriksaan(){
            echo '</br>';
            echo 'newid==';
            echo var_dump($_POST);
            echo '</br>';
            $this->Pemeriksaan_model->updatetcm();
            $this->Pemeriksaan_model->updatemikroskopis($newId);
            $this->Pemeriksaan_model->updatelanjutoat($newId);
            $this->Pemeriksaan_model->updatehasilpengobatan($newId);
            $this->Pemeriksaan_model->updatestokoat($newId);
            $this->Pemeriksaan_model->updateterapi($newId);
            $this->Pemeriksaan_model->updatetescepat($newId);
            $this->Pemeriksaan_model->updatevct($newId);
            $this->Pemeriksaan_model->updatepemeriksaan();
        }

    }