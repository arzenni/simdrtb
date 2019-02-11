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
            $this->Pemeriksaan_model->minitcm($newId);
            
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
                    $this->session->set_flashdata('pemeriksaan', 'Data Berhasil Ditambahkan');
                    redirect('pemeriksaan');
                }else{
                    $this->session->set_flashdata('errpemeriksaan', 'Nomor Rekam Medis ada Data Pasien Belum Ada');
                    redirect('pemeriksaan');
                }
            } else {
                $this->session->set_flashdata('errpemeriksaan', 'Nomor Rekam Medis Belum Diisi');
                redirect('pemeriksaan');
            }    

        }

        public function detil(){
            $id= $this->input->get('id');
            //    echo     $this->Pemeriksaan_model->detil($id);

            echo json_encode($this->Pemeriksaan_model->detil($id));
        // echo var_dump($this->Pemeriksaan_model->detil($_POST['id']));
        }


        public function autofill(){
            $norm = $this->input->get('norm');
            // echo var_dump($_POST);
            $auto =  $this->Pemeriksaan_model->autofill($norm);
            if($auto === null){
                    // var_dump($norm);
                    // var_dump($auto);
                    // echo 'data kosong';
                    $auto = json_encode($this->Pemeriksaan_model->getPasien($norm));
                     echo $auto;
            }else{
                echo json_encode($auto);
                // echo 'data ada';
                // var_dump($auto);
            }
        }

        public function updatePemeriksaan(){
            // var_dump($_POST);
            $this->Pemeriksaan_model->updatelanjutoat();
            $this->Pemeriksaan_model->updatestokoat();
            $this->Pemeriksaan_model->updateterapi();
            $this->Pemeriksaan_model->updatevct();
            $this->Pemeriksaan_model->updatepemeriksaan();
            // jika id ada di minitcm maka update
            // jika id tidak ada di mini tcm maka tambah
            $cek= $this->Pemeriksaan_model->idminitcm($this->input->post('idPeriksa')); 
            if($cek != null){
                $this->Pemeriksaan_model->updateminitcm();
            }else{
                $this->Pemeriksaan_model->minitcm($this->input->post('idPeriksa'));
            }
            $this->Pemeriksaan_model->updatekultur();
            $this->Pemeriksaan_model->updatemikroskopis();
            $this->Pemeriksaan_model->updatehasilpengobatan();
            $this->session->set_flashdata('pemeriksaan', 'Data Berhasil Diubah');
            redirect('pemeriksaan','refresh');
            
        }
        
        public function hapus($id){
            $this->Pemeriksaan_model->hapus($id); 
            $this->session->set_flashdata('pemeriksaan', 'Data Berhasil Dihapus');
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