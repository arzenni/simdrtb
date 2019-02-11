<?php

class tes_tcm extends CI_Controller{
    

    
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Tcm_model');
        }
        
        public function index(){
            $data['title'] = 'Tes TCM';
            $data['tcm'] = $this->Tcm_model->getAlltcm();
            $data['ruang'] = $this->Tcm_model->getAllruang();
            // var_dump($data['tcm']);
            $this->load->view("template/header",$data);
            $this->load->view("tes_tcm/index",$data);
            $this->load->view("template/footer");
        }

        public function tambahtcm(){
            date_default_timezone_set("Asia/Jakarta");
            // var_dump($_POST);
            $genid = $this->input->post('genxpert');
            // var_dump($genid);
            $wkt = date('Y-m-d H:i:s');
            $this->Tcm_model->tambahtcm($genid, $wkt);            
            redirect('tes_tcm','refresh');
            
        }
        
        public function ubahtcm(){
            echo 'yeay';
            $this->Tcm_model->updatetcm();
            
            redirect('tes_tcm','refresh');
            
        }
        
        public function hapustcm($reg){
            // echo var_dump($reg);
            $this->Tcm_model->hapustcm($reg);
            redirect('tes_tcm','refresh');
        }
        
        public function detiltcm(){
        //    echo 'detil';
            $id = $this->input->get('id');
            // var_dump($id);
            // var_dump($this->Tcm_model->detil($id));
            echo json_encode($this->Tcm_model->detil($id));
        }

        
    }