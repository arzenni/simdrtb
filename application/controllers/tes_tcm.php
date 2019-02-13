<?php

class tes_tcm extends CI_Controller
{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Tcm_model');
        }
        
        public function index(){
            $data = [
                "title" => "Tes TCM",
                "tcm" => $this->Tcm_model->getAlltcm(),
            ];
            $this->load->view("template/header",$data);
            $this->load->view("tes_tcm/index",$data);
            $this->load->view("template/footer");
        }
        
        public function tambahtcm()
        {
            date_default_timezone_set("Asia/Jakarta");
            $wkt = date('Y-m-d H:i:s');
            $genid = $this->input->post('genxpert');
            if($genid != null):
                    if($this->Tcm_model->cektcm($genid) == null)
                    {
                        $this->db->trans_start();
                        $this->Tcm_model->tambahtcm($genid, $wkt);
                        if ($this->db->trans_status() === FALSE)
                        {          
                                $this->db->trans_rollback();
                                $this->session->set_flashdata('errtcm', 'Terjadi Kesalahan');
                                redirect('tes_tcm','refresh');
                        }
                        else
                        {
                            $this->db->trans_complete();
                            $this->session->set_flashdata('tcm', 'Data Berhasil Disimpan');
                            redirect('tes_tcm','refresh');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('errtcm', 'Nomor RegGenExpert Sudah Ada');
                        redirect('tes_tcm','refresh');
                    }
                endif;    
            $this->session->set_flashdata('tcm', 'RegGenExpert Kosong');
            redirect('tes_tcm','refresh');
        }
        
        public function ubahtcm(){

            $this->db->trans_start();
            $this->Tcm_model->updatetcm();
            if ($this->db->trans_status() === FALSE)
            {
                $this->db->trans_rollback();
                $this->session->set_flashdata('errtcm', 'Terjadi Kesalahan');
                redirect('tes_tcm','refresh');
            }
            else
            {
                $this->db->trans_complete();
                $this->session->set_flashdata('tcm', 'Data Berhasil Diubah');
                redirect('tes_tcm','refresh');
            }  
        }
        
        public function hapustcm($reg){
            $this->db->trans_start();
            $this->Tcm_model->hapustcm($reg);
            if ($this->db->trans_status() === FALSE)
            {
                $this->db->trans_rollback();
                $this->session->set_flashdata('errtcm', 'Terjadi Kesalahan');
                redirect('tes_tcm','refresh');
            }
            else
            {
                $this->db->trans_complete();
                $this->session->set_flashdata('tcm', 'Data Berhasil Dihapus');
                redirect('tes_tcm','refresh');
            }
        }
        
        public function detiltcm()
        {
            $id = $this->input->get('id');
            echo json_encode($this->Tcm_model->detil($id));
        }

        public function autofill()
        {
            $norm = $this->input->get('norm');
            $auto =  $this->Tcm_model->autofill($norm);
            echo json_encode($auto);
         }

        
    }