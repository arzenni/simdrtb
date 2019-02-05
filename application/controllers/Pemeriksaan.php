<?php


class Pemeriksaan extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
            $this->load->model('Pemeriksaan_model');
            //$this->load->library('form_validation');
            // // $this->load->helper('form');
            $this->load->helper('string');
            
    }
        
        public function index()
        {
            $data['title'] ='Pemeriksaan';
            $data['pemeriksaan'] = $this->Pemeriksaan_model->getAllpemeriksaan();
            $data['ruang'] = $this->Pemeriksaan_model->getAllruang();
            // echo var_dump($data);
            $this->load->view('template/header', $data);
            $this->load->view('pemeriksaan/index', $data);
            $this->load->view('template/footer');      
        }

        public function lengkap(){
            date_default_timezone_set("Asia/Jakarta");
            $wkt = date('Y-m-d H:i:s');
            $idperiksa = trim($this->input->post('noRm'));
            $this->Pemeriksaan_model->tambahpemeriksaan($wkt, $idperiksa);
            $id = $this->Pemeriksaan_model->getIdperiksa();
            $newId = $id->idPeriksa;
            $this->Pemeriksaan_model->lanjutoat($newId);
            $this->Pemeriksaan_model->stokoat($newId);
            $this->Pemeriksaan_model->terapi($newId);
            $this->Pemeriksaan_model->vct($newId);
            
            $this->Pemeriksaan_model->mikroskopis($newId);
            $this->Pemeriksaan_model->kultur($newId);
            $this->Pemeriksaan_model->hasilpengobatan($newId);
        }


        public function tambahpemeriksaan()
        {   
            if ($this->input->post('noRm') !=null) 
            {
                if($this->Pemeriksaan_model->cekRm($this->input->post('noRm')) != null){
                    $this->lengkap();
                    redirect('pemeriksaan');
                }else{
                    echo 'Pasien Belum terdata';
                    redirect('pemeriksaan');

                }
            } else {
                echo 'norm kososng';
                redirect('pemeriksaan');
            }    

        }

        public function detil(){
        echo json_encode($this->Pemeriksaan_model->detil($_POST['id']));
        // echo var_dump($this->Pemeriksaan_model->detil($_POST['id']));
        }


        public function autofill(){
            $norm = $this->input->post('norm');
            // echo var_dump($_POST);
            $auto =  $this->Pemeriksaan_model->autofill($norm);
            if($auto === null){
                    // var_dump($norm);
                    // var_dump($auto);
                    $auto = json_encode($this->Pemeriksaan_model->getPasien($norm));
                     echo $auto;
            }else{
                echo json_encode($auto);
                // var_dump($auto);
            }
        }

        public function updatePemeriksaan(){
            $this->Pemeriksaan_model->updatelanjutoat();
            $this->Pemeriksaan_model->updatestokoat();
            $this->Pemeriksaan_model->updateterapi();
            $this->Pemeriksaan_model->updatevct();
            $this->Pemeriksaan_model->updatepemeriksaan();

            $this->Pemeriksaan_model->updatekultur();
            $this->Pemeriksaan_model->updatemikroskopis();
            $this->Pemeriksaan_model->updatehasilpengobatan();
            redirect('pemeriksaan','refresh');
            
        }


        public function hapus($id){
            var_dump($id);
            $this->Pemeriksaan_model->hapus($id); 
           redirect('pemeriksaan','refresh');
            
        }

        function autocomplete(){
            if (isset($_GET['noRm'])) {
                $result = $this->Pemeriksaan_model->autokomplit($_GET['noRm']);
                if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = $row->norm;
                    echo json_encode($arr_result);
                    var_dump($arr_result);
                }
            }
        }

    }